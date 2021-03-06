{{--
Template Name: Source (Tour Operators)
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection

@php
$args = array(
  'post_type'       => array( 'exp_client' ),
  'meta_key'        => 'exp_client_type',
  'posts_per_page'  => -1,
  'meta_value'      => 'operator',
  'orderby'         => 'rand',
);
$operator = new WP_Query( $args );
@endphp

<div class="container">
  <h1 class="tc avenir pt2 fw1 ph3 ph0-l">Tour Operators</h1>
  <br>
  {{-- The Loop --}}
  @if ($operator->have_posts())
    <table class="table table-hover table-sm">
      @while ( $operator->have_posts() )
        @php($operator->the_post())
        <tr>
          <td><b>{{ get_the_title() }}</b></td>
          <td><small class="text-muted">{{ get_post_meta(get_the_ID(), 'exp_client_source_type', true) }}</small></td>
          <td class="text-right">
            @if ( get_post_meta(get_the_ID(), 'exp_client_website', true) )
              <a href="{{ get_post_meta(get_the_ID(), 'exp_client_website', true) }}" target="_blank">catalog</a>
            @endif
            @if ( get_post_meta(get_the_ID(), 'exp_client_source', true) )
              &nbsp;  <a href="{{ get_post_meta(get_the_ID(), 'exp_client_source', true) }}" target="_blank">source</a>
            @endif

            @if ( get_post_meta(get_the_ID(), 'exp_client_official_website', true) )
              &nbsp;  <a href="{{ get_post_meta(get_the_ID(), 'exp_client_official_website', true) }}" target="_blank">website</a>
            @endif
          </td>
        </tr>
      @endwhile
    </table>
  @else
    No Tour operators found
  @endif

  {{-- Restore original Post Data --}}
  @php( wp_reset_postdata() )
</div>
