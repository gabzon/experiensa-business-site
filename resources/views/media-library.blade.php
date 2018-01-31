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
      'posts_per_page'         => 100,
      'orderby'                => 'rand',
      'post_status'            => 'inherit',
    );

    // The Query
    $media = new WP_Query( $args );
    @endphp

    @if ( $media->have_posts() )

      <div class="card-columns" id="card-columns">
        @while ( $media->have_posts() )
          <div class="card grow">
            @php( $media->the_post() )
            @php( $image = wp_get_attachment_image_src( get_the_ID(), 'full' ) )
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
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        {!! get_the_posts_navigation() !!}
    @else
      Nothing
    @endif

    @php(wp_reset_postdata())

    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
