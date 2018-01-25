{{--
Template Name: Media Library
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    @php
    // WP_Query arguments
    $args = array(
      'post_type'              => array( 'attachment' ),
      'post_mime_type'         => 'image',
      'nopaging'               => false,
      'posts_per_page'         => '12',
      'orderby'                => 'rand',
      'post_status'            => 'inherit',
    );

    // The Query
    $media = new WP_Query( $args );
    @endphp

    @if ( $media->have_posts() )
      <div class="card-columns">
        @while ( $media->have_posts() )
          <div class="card grow">
            @php( $media->the_post() )
            @php( $image = wp_get_attachment_image_src( get_the_ID(), 'full' ) )
            <img src="{{ $image[0] }}" class="card-img-top img-fluid">
            <div class="card-img-overlay hover-bg-black-40">
              @php
                $url = get_post_meta(get_the_ID(),'exp_media_url',true);
                $terms = wp_get_post_terms( get_the_ID(), 'media_country' );
              @endphp
              <span class="card-title white b media-title">{{ get_the_title() }}</span><br>
              <span class="white"><i class="fas fa-map-marker"></i> {{$terms[0]->name }}</span>
              <div class="media-buttons" style="position:absolute; bottom:10px;">
                <a href="{{ $image[0] }}" class="btn btn-outline-light btn-sm" download><i class="fas fa-download"></i></a>
                <a href="{{ $url }}" class="btn btn-outline-light btn-sm" target="_blank"><i class="fas fa-globe"></i></a>
                <a href="{{ get_permalink() }}" class="btn btn-outline-light btn-sm" target="_blank"><i class="fas fa-info-circle"></i></a>
              </div>
            </div>
          </div>
        @endwhile
      </div>
    @else
      Nothing
    @endif

    @php(wp_reset_postdata())

    @include('partials.content-page')
  @endwhile
@endsection
