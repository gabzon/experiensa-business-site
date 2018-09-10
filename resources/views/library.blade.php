{{--
Template Name: Library
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <br>
    Hello look under this
    <div id="librar"></div>
    <br>
    <br>
    <h1>Wordpress</h1>
    {{-- @include('partials.content-page') --}}
  @endwhile

  {{-- https://discourse.roots.io/t/pagination-custom-query-cpt/9908 --}}
  @php
  // WP_Query arguments
  global $paged;
  //global $wp_query;

  $wp_query = NULL;
  $temp = $wp_query;

  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

  $args = [
    'post_type'              => array( 'attachment' ),
    'posts_per_page'         => 30,
    'orderby'                => 'rand',
    'post_status'            => 'inherit',
    'post_mime_type'         => 'image',
    'paged'                  => $paged
  ];

  // The Query
  $media = new WP_Query( $args );

  $wp_query = $media;
  @endphp


  @if ( $media->have_posts() )

    <div class="card-columns" id="card-columns">
      @while ( $media->have_posts() )
        <div class="card grow">
          @php( $media->the_post() )
          @php( $image = wp_get_attachment_image_src( get_the_ID(), 'medium_large' ) )
          @php( $image_full = wp_get_attachment_image_src( get_the_ID(), 'full' ) )
          @php( $url = get_post_meta(get_the_ID(),'exp_media_url',true) )
          @php( $terms = wp_get_post_terms( get_the_ID(), 'media_country' ) )
          <img src="{{ $image[0] }}" class="card-img-top img-fluid">
          <div class="card-img-overlay hover-bg-black-40">
            <span class="card-title white b media-title">{{ get_the_title() }}</span><br>
            @if ($terms )
              <span class="white"><i class="fas fa-map-marker"></i> {{$terms[0]->name }}</span>
            @endif
            <div class="media-buttons" style="position:absolute; bottom:10px;">
              <a href="{{ $image[0] }}" class="btn btn-outline-light btn-sm" download><i class="fas fa-download"></i></a>
              @if ($url)
                <a href="{{ $url }}" class="btn btn-outline-light btn-sm" target="_blank"><i class="fas fa-globe"></i></a>
              @endif
              <a href="{{ get_permalink() }}" class="btn btn-outline-light btn-sm" target="_blank"><i class="fas fa-info-circle"></i></a>
            </div>
          </div>
        </div>
      @endwhile
    </div>

    @php(wp_reset_postdata())

    @if ($media->max_num_pages > 1)
      <br>
      <nav class="posts-navigation">
        <div class="nav-previous">
          {!! get_previous_posts_link( __('&larr; Previous', 'sage') ) !!}
        </div>
        <div class="nav-next">
          {!! get_next_posts_link( __('Next &rarr;', 'sage'), $media->max_num_pages ) !!}
        </div>
      </nav>
      @php
      $wp_query = NULL;
      $wp_query = $temp;
      @endphp
    @endif
  @else
    <div class="alert alert-warning">
      {{ __('Sorry, no posts were found.', 'sage') }}
    </div>
  @endif
@endsection
