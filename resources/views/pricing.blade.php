{{--
Template Name: Pricing
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <br>
    <div class="row justify-content-md-center">
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card text-center avenir">
          <div class="card-body">
            <h3 class="card-title text-muted ttu">Basic</h3>
            <h1 class="card-title f1 fw1" style="margin-bottom:-10px">1000 CHF<br></h1>
            <span style="margin-top:100px" class="text-muted i">per year</span>
          </div>
          <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action">Universal catalog</a>
            <a class="list-group-item list-group-item-action">Request Form</a>
            <a class="list-group-item list-group-item-action">Media library access</a>
            <a class="list-group-item list-group-item-action">Daily automated backup</a>
            <a class="list-group-item list-group-item-action">Brute force attack protection</a>
            <a class="list-group-item list-group-item-action">Downtime monitoring</a>
            <a class="list-group-item list-group-item-action">Automated spam filtering</a>
            <a class="list-group-item list-group-item-action">Stats and related content</a>
            <a class="list-group-item list-group-item-action">Automated social media posting</a>
            <a class="list-group-item list-group-item-action">Email support</a>
          </div>
          <div class="card-body">
            <a href="#" class="btn btn-primary ttu grow">sign up</a>
          </div>
        </div>

      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card text-center avenir">
          <div class="card-body">
            <h3 class="card-title text-muted ttu">Pro</h3>
            <h1 class="card-title f1 fw1" style="margin-bottom:-10px">2000 CHF<br></h1>
            <span style="margin-top:100px" class="text-muted i">per year</span>
          </div>
          <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action">Automated universal catalog</a>
            <a class="list-group-item list-group-item-action">Intelligent Form connected to partners</a>
            <a class="list-group-item list-group-item-action">Media library access</a>
            <a class="list-group-item list-group-item-action">Real-time automated backups</a>
            <a class="list-group-item list-group-item-action">Real-time automated backups</a>
            <a class="list-group-item list-group-item-action">Brute force attack protection</a>
            <a class="list-group-item list-group-item-action">Downtime monitoring</a>
            <a class="list-group-item list-group-item-action">Automated spam filtering</a>
            <a class="list-group-item list-group-item-action">Automated malware scanning</a>
            <a class="list-group-item list-group-item-action">Automatic security fixes</a>
            <a class="list-group-item list-group-item-action">Stats and related content</a>
            <a class="list-group-item list-group-item-action">Automated social media posting</a>
            <a class="list-group-item list-group-item-action">Scheduled social media posting</a>
            <a class="list-group-item list-group-item-action">SEO preview tools</a>
            <a class="list-group-item list-group-item-action">Google Analytics integration</a>
          </div>
          <div class="card-body">
            <a href="#" class="btn btn-primary ttu grow">Sign up</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
