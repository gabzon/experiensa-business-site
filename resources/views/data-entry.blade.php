{{--
Template Name: Data Entry
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    <p>
      Experiensa’s mission is to help travel agencies to keep an updated catalog of travel offers, we achieve this by feeding our system with travel products from each Tour Operator (T.O).
      This page defines a standard of data entry in the experiensa system for all Tour Operators in Switzerland in order to ensure quality and coherence
    </p>

    <h2>Index</h2>
    <ul>
      <li><a href="#concepts">Concepts and Tasks specifications</a></li>
      <li><a href="#fields">List of fields</a></li>
      <li><a href="#howto">How to input the information in Experiensa?</a></li>
      {{-- <li><a href="#procedure">Input Procedure</a></li> --}}
      <li><a href="#future">Future Fields</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
    </ul>

    <section id="concepts" class="pt-5">
      <hr>
      <h3>Concepts and Tasks specifications</h3>
      <ul>
        <li>Check the list of each T.O (tour operator) in the page <a href="http://experiensa.com/to/" target="_blank">http://experiensa.com/to/</a></li>
        <li>Collect offers (PDF Files/Brochures) from each T.O (the source of information will depends on each T.O, it could be newsletter or website)</li>
        <li>Create a “voyage” for each offer in the corresponding T.O Website.</li>
        <li>The experiensa system uses the name “voyage” referring to an offer. It concerns all the trips, hosting information, activities, itineraries during a specific period of time.</li>
        <li>Sometimes one page of a PDF file/Brochure can have many offers, if this is the case separate the offers. For every offer create a different voyage</li>
        <li>For every voyage created input the information of the offer into the corresponding fields</li>
        <li>Keep the catalog of each tour operator up-to-date (all information from brochures, specially dates, price, images, availabilities)</li>
        <li>If some offers from a particular T.O have not been received inform me</li>
        <li>Collect media content (Images, Gifs, Videos)</li>
        <li>Send me a WhatsApp message each day when you start working and when you finish working.</li>
        <ul>
          <li>The first message (starting hour) should include what you plan to do.</li>
          <li>The last message (finishing hour) should include what you have accomplished. (Number of offers + images)</li>
        </ul>
        <li>If you have any questions or concerns write me a WhatsApp message and I’ll answer as soon as I can</li>
        <li>You should work a minimum of 3h per day, enough time to create a minimum of 10 voyages</li>
        <li>A month has in average 21.5 working days</li>
        <li>You should achieve the creation of a minimum 210 completed and updated voyages per month</li>
        <li>If you are unable to work for any reason inform me as soon as you know, don’t wait last minute to inform me.</li>
      </ul>
      <br>
    </section>


    <section id="fields" class="pt-5">
      <hr>
      <h3>List of fields</h3>
      <p>
        Currently there are 19 fields used to input data into Experiensa. Each field correspond to a specific type of information. The separation of
        information will give us the freedom to render the information in a particular way as well a to create an easy to use and understandable API.
        The fields are listed and described in the table below
      </p>
      <br>
      @include('standard.fields')
    </section>

    <br>

    <section id="howto" class="pt-5">
      @include('standard.howto')
    </section>

    <br>

    <section id="future" class="pt-5">
      <hr>
      <h3>Future fields</h3>
      <br>
      <ul>
        <li>Cover image square (min res. 1280px x 1280px)</li>
        <li>Cover image landscape (min res. 1920px)</li>
        <li>Cover image portrait (min res. 900px)</li>
        <li>Gif cover images</li>
        <li>Reduction checkbox (if % or fixed price)</li>
        <li>Videos (Repeater field)</li>
      </ul>
    </section>

    <br>

    <section id="roadmap" class="pt-5">
      <hr>
      <h3>Roadmap</h3>
      @include('standard.roadmap')
    </section>

    {{-- @include('partials.content-page') --}}
  @endwhile

@endsection
