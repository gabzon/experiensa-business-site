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
      <li><a href="#responsability">Tasks specifications & responsabilities</a></li>
      <li><a href="#steps">Steps & procedure</a></li>
      <li><a href="#concepts">Concepts</a></li>
      <li><a href="#fields">List of fields</a></li>
      <li><a href="#howto">How to input the information in Experiensa?</a></li>
      <li><a href="#future">Future Fields</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
    </ul>

    <section id="responsability" class="pt-5">
      <hr>
      <h3>Tasks specifications & responsabilities</h3>
      <ul>
        <li>Collect the necessary data (travel offers) to input in the experiensa system</li>
        <li>Collect media content (Images, Gifs, Videos) for each travel offer</li>
        <li>Input data in the experiensa system according to the corresponding website</li>
        <li>Keep the data <b>up to date</b> in the experiensa system, specially <i><u>dates & prices</u></i></li>
        <li>If some offers from a particular T.O have not been received inform me</li>
        <li>Send me a WhatsApp message each day when you start working and when you finish working.</li>
        <ul>
          <li>The first message (starting hour) should include what you plan to do.</li>
          <li>The last message (finishing hour) should include what you have accomplished. (Number of offers + images)</li>
        </ul>
        <li>If you have any questions or concerns write me a WhatsApp message and I’ll answer as soon as I can</li>
        <li>You should work a minimum of 3h per day, enough time to create a minimum of 10 voyages during that day</li>
        <li>A month has in average 21.5 working days</li>
        <li>You should achieve the creation of a minimum 210 completed and updated voyages per month</li>
        <li>If you are unable to work for any reason inform me as soon as you know, don’t wait last minute to inform me.</li>
        <li>In order to get paid, at the end of the month you must share with me an excel file containing the following columns: <br>
          <table border="1" width="100%">
            <tr>
              <td>task</td>
              <td>Date</td>
              <td>Starting time</td>
              <td>Ending time</td>
              <td>Duration</td>
              <td>Comments</td>
              <td>URL</td>
            </tr>
          </table>
          <i class="red">* Important without this excel sheet you will not get paid</i><br>
        </li>
        <li>You also need to send me a bill you can do this with word or excel</li>
      </ul>
    </section>

    <section id="steps" class="pt-5">
      <hr>
      <h3>Steps & Procedure</h3>
      <ol>
        <li>Open the website <a href="http://experiensa.com/to/" target="_blank">tour operator list</a> and choose one Tour Operator(T.O) from the list</li>
        <li>Click on "source" link from the choosen T.O to open the source location from where offers (data) will be collected <br>
          <i>If the link "source" is unavailable probably is because the source is either from a website or a newsletter</i>
          <ul>
            <li>Read the description where data comes from</li>
            <li>If the source information comes from a website, then click on the website link</li>
            <li>If the source information comes from newsletter, then connect to your email account and check info@experiensa.com</li>
          </ul>
        </li>
        <li>Collect all <i>updated</i> offers (PDF Files/Brochures/websites urls) from that T.O. necessary to input in the experiensa system</li>
        <li>Collect the media (photos, gifs, videos) necessary for each offer</li>
        <li>Open once again the website <a href="http://experiensa.com/to/" target="_blank">tour operator list</a> choose on the same tour operator, this time click on the "catalog" link</li>
        <li>The catalog page of the tour operator will open, now you need to connect to the administrative section</li>
        <li>Go to the Navigation bar in your web browser and at the end of the url add <code>/wp-admin</code> or click on <code>Login</code> in the navigation bar<br>
          <i>Example: if the T.O. website is <code>https://indalo.experiensa.ch</code> it should be like this <code>https://indalo.experiensa.ch/wp-admin</code></i>
        </li>
        <li>Input offers in the T.O Catalog website by creating voyages. To know more on how to create a voyage please check out this <a href="#howto">section</a></li>
      </ol>
    </section>

    <section id="concepts" class="pt-5">
      <hr>
      <h3>Concepts</h3>
      <ul>
        <li>The experiensa system uses the name “voyage” referring to an offer. It concerns all the trips, hosting information, activities, itineraries during a specific period of time.</li>
        <li>Sometimes one page of a PDF file/Brochure can have many offers, if this is the case separate the offers. For every offer create a different voyage</li>
        <li>For every voyage created input the information of the offer into the corresponding fields</li>
        <li>Keep the catalog of each tour operator up-to-date (all information from brochures, specially dates, price, images, availabilities)</li>
      </ul>
    </section>

    <section id="fields" class="pt-5">
      <hr>
      <h3>List of fields</h3>
      <p>
        Currently there are more than 20 fields used to input data into Experiensa. Each field correspond to a specific type of information. The separation of
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
