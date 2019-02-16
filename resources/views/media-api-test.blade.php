{{--
  Template Name: Media api test
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    {{-- @include('partials.content-page') --}}
  @endwhile

  @php
  $args = array(
    'post_type'       => array( 'attachment' ),
    'post_mime_type'  => 'image',
    'post_status'     => 'inherit',
    'posts_per_page'  => 100,
    'tax_query' => array(
      array(
        'taxonomy' => 'media_country',
        'field'    => 'slug',
        'terms'    => 'france',
      ),
    ),
  );
  $media = new WP_Query( $args );

@endphp

@if ($media->have_posts())
@while ($media->have_posts())
  @php $media->the_post(); @endphp
  <table>
    <tr>
      <td>ID</td><td>{{ get_the_ID() }}</td>
    </tr>
    <tr>
      <td>title</td>
      <td>{{get_the_title()}}</td>
    </tr>
  </table>
@endwhile
@endif

@php wp_reset_postdata(); @endphp


{{-- categories
places
countries
season
daylight
destinations
format       --}}




@endsection
