{{--
Template Name: Clients
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <br><br>
    @include('partials.page-header')
  @endwhile

  {{-- WP_Query arguments --}}
  @php
  $args = array(
    'post_type'       => array( 'exp_client' ),
    'posts_per_page'  => -1,
  );
  $clients = new WP_Query( $args );
  @endphp

  {{-- The Loop --}}
  @if ($clients->have_posts())
    <div class="card-columns">
      @while ( $clients->have_posts() )
        @php($clients->the_post())
        <a href="{{ get_post_meta(get_the_ID(), 'exp_client_website', true) }}">
          <div class="card">
            <img class="card-img-top" src="{{ get_the_post_thumbnail_url( get_the_ID(),'post-thumbnail' ) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title tc">{{ get_the_title() }}</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
              <p class="card-text tc"><small class="text-muted ttc">{{ get_post_meta(get_the_ID(),'exp_client_type',true) }}</small></p>
            </div>
          </div>
        </a>
      @endwhile
    </div>
  @else
    no posts found
  @endif

  {{-- Restore original Post Data --}}
  @php( wp_reset_postdata() )
  <div id="react1"></div>
  {{-- @include('partials.content-page') --}}

@endsection
