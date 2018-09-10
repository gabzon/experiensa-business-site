{{--
Template Name: Homepage 2.0
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <h1 class="f2 f2-m f1-l fw2 black-90 mv6 tc avenir">An efficient and intelligent website for travel companies to attract and build client's loyalty</h1>
    <div class="row justify-content-md-center">
      <div class="col-10">
        <img src="@asset('images/travel-agencies.jpg')">
      </div>
    </div>
    <br>
    <section class="avenir">
      <h2 class="f1 tc mv3">Features</h2>
      <div class="row tc mv5">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <span class="fa-stack fa-2x experiensa-color mv2">
            <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
            <i class="far fa-gem fa-stack-1x fa-inverse" aria-hidden="true"></i>
          </span>
          <h3>Websites</h3>
          <p>
            Beautiful & attractive web designs for travel companies
          </p>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <span class="fa-stack fa-2x experiensa-color mv2">
            <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
            <i class="far fa-newspaper fa-stack-1x fa-inverse" aria-hidden="true"></i>
          </span>
          <h3>Catalog</h3>
          <p>
            Share travel products with your partners automatically
          </p>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <span class="fa-stack fa-2x experiensa-color mv2">
            <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
            <i class="fa fa-heart fa-stack-1x fa-inverse" aria-hidden="true"></i>
          </span>
          <h3>Simplicity</h3>
          <p>
            An Easy to Use and Out of the Box content management system
          </p>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <span class="fa-stack fa-2x experiensa-color mv2">
            <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
            <i class="fa fa-paper-plane fa-stack-1x fa-inverse" aria-hidden="true"></i>
          </span>
          <h3>Efficiency</h3>
          <p>
            Improve your communication and save time writing emails
          </p>
        </div>
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
