{{--
Template Name: Pages & Sections
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <br>
    @include('partials.page-header')
    In order to create a easy, usuful and attractive website we need to organize information in a simple way. That is why we use pages and sections to organize your information

    Most of the information a travel and service company need can be describe as following:

    <br><br>
    <div class="row">
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <div class="img" style="background:#eee;">
            <div class="card-body">
              <img src="@asset('images/icons/catalog.png')" alt="" class="card-img-top img-fluid" >
            </div>
          </div>
          <div class="card-body">
            <div class="card-title">
              <h3>Catalog</h3>
            </div>
            <div class="card-description">
              <p>List of products and/or services offer by the travel company</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/form.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>Form</h3>
            </div>
            <div class="card-description">
              <p>Inquery form</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/contact.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>Contact</h3>
            </div>
            <div class="card-text">
              <p>Contact information (Address, email, phone, schedule)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/testimonials.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>Testimonials</h3>
            </div>
            <div class="card-description">
              <p>Give credibility to your company thanks to the reviews made by clients</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/about.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>About us</h3>
            </div>
            <div class="card-description">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/team.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>The Team</h3>
            </div>
            <div class="card-description">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/social.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>Social Media</h3>
            </div>
            <div class="card-description">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/certificate.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>Certificates</h3>
            </div>
            <div class="card-description">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <img src="@asset('images/icons/partners.png')" alt="" class="card-img-top img-fluid" style="background:#eee;">
          <div class="card-body">
            <div class="card-title">
              <h3>Partners</h3>
            </div>
            <div class="card-text">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mb-3">
        <div class="card grow text-center">
          <div class="img" style="background:#eee;">
            <div class="card-body">
              <img src="@asset('images/icons/blog.png')" alt="" class="card-img-top img-fluid" >
            </div>
          </div>
          <div class="card-body">
            <div class="card-title">
              <h3>Blog</h3>
            </div>
            <div class="card-description">
              <p>(News)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    We call each of this information elements a section. These sections can be included in pages.

    To better understand pages & sections, imagine pages like rooms and sections like furniture. You can add as many furniture object as you want in a room. The same goes for sections inside a page

    We recommend our new clients to start with only one page with the following sections:

    Page : Homepage
    Sections: Catalog, Enquiry form, About, Contact
    @include('partials.content-page')
  @endwhile
@endsection
