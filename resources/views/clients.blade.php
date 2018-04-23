{{--
Template Name: Clients
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <br><br>
    {{-- @include('partials.page-header') --}}
  @endwhile

  {{-- WP_Query arguments --}}
  @php
  $args = array(
    'post_type'       => array( 'exp_client' ),
    'meta_key'        => 'exp_client_type',
    'posts_per_page'  => -1,
    'meta_value'      => 'operator',
  );
  $operator = new WP_Query( $args );
  @endphp

  <h1 class="tc avenir pt2 fw1 ph3 ph0-l">Tour Operators</h1>
  <br>
  {{-- The Loop --}}
  @if ($operator->have_posts())
    <div class="row">
      @while ( $operator->have_posts() )
        @php($operator->the_post())
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <a href="{{ get_post_meta(get_the_ID(), 'exp_client_website', true) }}">
            <div class="card">
              <img class="card-img-top" src="{{ get_the_post_thumbnail_url( get_the_ID(),'post-thumbnail' ) }}" alt="Card image cap">
              {{-- <div class="card-body"> --}}
                {{-- <h5 class="card-title tc">{{ get_the_title() }}</h5> --}}
                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                {{-- <p class="card-text tc"><small class="text-muted ttc">{{ get_post_meta(get_the_ID(),'exp_client_type',true) }}</small></p> --}}
              {{-- </div> --}}
            </div>
          </a>
        </div>
      @endwhile
    </div>
  @else
    no Tour operators found
  @endif

  {{-- Restore original Post Data --}}
  @php( wp_reset_postdata() )
  <br>
  <hr>
  <h1 class="tc avenir pt2 fw1 ph3 ph0-l">Travel agencies</h1>
  <br>
  {{-- WP_Query arguments --}}
  @php
  $args = array(
    'post_type'       => array( 'exp_client' ),
    'meta_key'        => 'exp_client_type',
    'posts_per_page'  => -1,
    'meta_value'      => 'agency',
  );
  $agency = new WP_Query( $args );
  @endphp

  @if ($agency->have_posts())
    <div class="row">
      @while ( $agency->have_posts() )
        @php($agency->the_post())
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <a href="{{ get_post_meta(get_the_ID(), 'exp_client_website', true) }}" target="_blank">
            <div class="card">
              <img class="card-img-top" src="{{ get_the_post_thumbnail_url( get_the_ID(),'post-thumbnail' ) }}" alt="Card image cap">
              <div class="card-body">
                {{-- <h5 class="card-title tc">{{ get_the_title() }}</h5> --}}
                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                <p class="card-text tc"><small class="text-muted ttc">{{ get_post_meta(get_the_ID(),'exp_client_type',true) }}</small></p>
              </div>
            </div>
          </a>
        </div>
      @endwhile
    </div>
  @else
    No Agencies found
  @endif

  <div id="react1"></div>
  {{-- @include('partials.content-page') --}}

@endsection
