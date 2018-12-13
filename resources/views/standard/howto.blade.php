<hr>
<h3>How to input the data into Experiensa system?</h3>
<br>
<div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
      <iframe width="100%" height="300" src="https://www.youtube.com/embed/Vo2TYNodHC4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <p>Read carefully each travel offer and input the data of the offer into the appropriate field in the corresponding Tour Operator’s website. Each voyage created needs to have the following information:</p>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-title-tab" data-toggle="pill" href="#v-pills-title" role="tab" aria-controls="v-pills-title" aria-selected="true">Title</a>
      <a class="nav-link" id="v-pills-slogan-tab" data-toggle="pill" href="#v-pills-slogan" role="tab" aria-controls="v-pills-slogan" aria-selected="false">Slogan</a>
      <a class="nav-link" id="v-pills-description-tab" data-toggle="pill" href="#v-pills-description" role="tab" aria-controls="v-pills-description" aria-selected="false">Description</a>
      <a class="nav-link" id="v-pills-price-tab" data-toggle="pill" href="#v-pills-price" role="tab" aria-controls="v-pills-price" aria-selected="false">Price</a>
      <a class="nav-link" id="v-pills-dates-tab" data-toggle="pill" href="#v-pills-dates" role="tab" aria-controls="v-pills-dates" aria-selected="false">Dates</a>
      <a class="nav-link" id="v-pills-worldregions-tab" data-toggle="pill" href="#v-pills-worldregions" role="tab" aria-controls="v-pills-worldregions" aria-selected="false">World region</a>
      <a class="nav-link" id="v-pills-country-tab" data-toggle="pill" href="#v-pills-country" role="tab" aria-controls="v-pills-country" aria-selected="false">Country</a>
      <a class="nav-link" id="v-pills-destinations-tab" data-toggle="pill" href="#v-pills-destinations" role="tab" aria-controls="v-pills-destinations" aria-selected="false">Destinations</a>
      <a class="nav-link" id="v-pills-themes-tab" data-toggle="pill" href="#v-pills-themes" role="tab" aria-controls="v-pills-themes" aria-selected="false">Themes</a>
      <a class="nav-link" id="v-pills-included-tab" data-toggle="pill" href="#v-pills-included" role="tab" aria-controls="v-pills-included" aria-selected="false">Included</a>
      <a class="nav-link" id="v-pills-excluded-tab" data-toggle="pill" href="#v-pills-excluded" role="tab" aria-controls="v-pills-excluded" aria-selected="false">Excluded</a>
      <a class="nav-link" id="v-pills-media-tab" data-toggle="pill" href="#v-pills-media" role="tab" aria-controls="v-pills-media" aria-selected="false">Media</a>
      <a class="nav-link" id="v-pills-categories-tab" data-toggle="pill" href="#v-pills-categories" role="tab" aria-controls="v-pills-categories" aria-selected="false">Categories</a>
      <a class="nav-link" id="v-pills-tags-tab" data-toggle="pill" href="#v-pills-tags" role="tab" aria-controls="v-pills-tags" aria-selected="false">Tags</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-title" role="tabpanel" aria-labelledby="v-pills-title-tab">
        @include('standard.fields.title')
      </div>
      <div class="tab-pane fade" id="v-pills-slogan" role="tabpanel" aria-labelledby="v-pills-slogan-tab">
        @include('standard.fields.slogan')
      </div>
      <div class="tab-pane fade" id="v-pills-description" role="tabpanel" aria-labelledby="v-pills-description-tab">
        @include('standard.fields.content')
      </div>
      <div class="tab-pane fade" id="v-pills-price" role="tabpanel" aria-labelledby="v-pills-price-tab">
        @include('standard.fields.pricing')
      </div>
      <div class="tab-pane fade" id="v-pills-dates" role="tabpanel" aria-labelledby="v-pills-dates-tab">
        @include('standard.fields.dates')
      </div>
      <div class="tab-pane fade" id="v-pills-worldregions" role="tabpanel" aria-labelledby="v-pills-worldregions-tab">
        @include('standard.fields.world-regions')
      </div>
      <div class="tab-pane fade" id="v-pills-country" role="tabpanel" aria-labelledby="v-pills-country-tab">
        @include('standard.fields.countries')
      </div>
      <div class="tab-pane fade" id="v-pills-themes" role="tabpanel" aria-labelledby="v-pills-themes-tab">
        @include('standard.fields.themes')
      </div>
      <div class="tab-pane fade" id="v-pills-included" role="tabpanel" aria-labelledby="v-pills-included-tab">
        @include('standard.fields.included')
      </div>
      <div class="tab-pane fade" id="v-pills-excluded" role="tabpanel" aria-labelledby="v-pills-excluded-tab">
        @include('standard.fields.excluded')
      </div>
      <div class="tab-pane fade" id="v-pills-media" role="tabpanel" aria-labelledby="v-pills-media-tab">
        @include('standard.fields.media')
      </div>
      <div class="tab-pane fade" id="v-pills-categories" role="tabpanel" aria-labelledby="v-pills-categories-tab">
        @include('standard.fields.categories')
      </div>
      <div class="tab-pane fade" id="v-pills-tags" role="tabpanel" aria-labelledby="v-pills-tags-tab">
        @include('standard.fields.tags')
      </div>
    </div>
  </div>
</div>
