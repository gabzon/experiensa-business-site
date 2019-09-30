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
'post_type' => array( 'exp_client' ),
'meta_key' => 'exp_client_type',
'posts_per_page' => -1,
'orderby' => 'rand',
);
$operator = new WP_Query( $args );
$country_list = App::country_list();
@endphp

<h1 class="tc avenir pt2 fw1 ph3 ph0-l">Agencies & Tour Operators</h1>
<br>
{{-- The Loop --}}


<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" width="10%">Logo</th>
        <th scope="col" width="15%">Name</th>
        <th scope="col" width="20%">Location</th>
        <th scope="col" width="10%">Type</th>
        <th scope="col" width="40%">World Regions</th>
        <th scope="col" width="5%">View</th>
      </tr>
    </thead>
    @if ( $operator->have_posts() )
    @while ( $operator->have_posts() )
    @php( $operator->the_post() )
    <tbody>

          <tr>
              <td valign="top"><img class="img-fluid img-rounded" src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}" width="100"></th>
              <td>{{ get_the_title() }}</td>
              <td>{{ get_post_meta(get_the_ID(), 'exp_client_state', true)}}, {{ $country_list[get_post_meta(get_the_ID(), 'exp_client_country', true)] }}</td>
              <td><span class="ttc">{{ get_post_meta(get_the_ID(),'exp_client_type', true) }}</span></td>
              <td>{!! get_the_term_list( get_the_ID(), 'exp_world_region', '', ', ', '' ) !!}</td>
              <td class="tc"><a href="{{ get_the_permalink()}}"> <i class="fas fa-eye"></i> </a></td>
            </tr>      
    </tbody>
    @endwhile
@else
no Tour operators found
@endif
{{-- Restore original Post Data --}}
@php( wp_reset_postdata() )
  </table>



<div id="react1"></div>
{{-- @include('partials.content-page') --}}
@endsection

