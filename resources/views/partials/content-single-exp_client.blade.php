@php
$country_list = App::country_list();
$country = $country_list[get_post_meta(get_the_ID(), 'exp_client_country', true)];
$fb = get_post_meta(get_the_ID(), 'exp_client_facebook', true);
$ig = get_post_meta(get_the_ID(), 'exp_client_instagram', true);
$yt = get_post_meta(get_the_ID(), 'exp_client_youtube', true);
$pt = get_post_meta(get_the_ID(), 'exp_client_pinterest', true);
$sk = get_post_meta(get_the_ID(), 'exp_client_skype', true);
$sc = get_post_meta(get_the_ID(), 'exp_client_snapchat', true);
$wa = get_post_meta(get_the_ID(), 'exp_client_whatsapp', true);
$tw = get_post_meta(get_the_ID(), 'exp_client_twitter', true);
$li = get_post_meta(get_the_ID(), 'exp_client_linkedin', true);
$coordenates = get_post_meta(get_the_ID(), 'exp_client_latitude', true) . ',' . get_post_meta(get_the_ID(),
'exp_client_longitude', true);
$contacts = get_post_meta(get_the_ID(), 'exp_client_contact') ;
@endphp


<article @php(post_class())>

  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      @include('clients/contact-info')
      <header class="pv3">        
        @include('partials/entry-meta')
      </header>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-9">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
          {!! get_post_meta(get_the_ID(),'exp_client_google_maps', true) !!}

          @if (get_post_meta(get_the_ID(), 'exp_client_address', true))
            <small>
              <i class="fas fa-home"></i>
              {{ get_post_meta(get_the_ID(), 'exp_client_address', true)}},
              {{ get_post_meta(get_the_ID(), 'exp_client_postal_code', true)}},
              {{ get_post_meta(get_the_ID(), 'exp_client_city', true)}},
              {{ get_post_meta(get_the_ID(), 'exp_client_state', true)}}, {{ $country }}
            </small>
            <br>              
          @endif

          @if ( get_post_meta(get_the_ID(), 'exp_client_latitude', true) )
          <span class="text-muted small">
              <i class="fas fa-location-arrow"></i> {{ $coordenates }}
            </span>
            <br>
          @endif          
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
          <div class="card">
            <ul class="list-group list-group-flush">
              @if( get_post_meta(get_the_ID(), 'exp_client_type', true) )
              <li class="list-group-item">
                <strong>Type: </strong> <span class="ttc">{{ get_post_meta(get_the_ID(), 'exp_client_type', true) }}</span>
              </li>
              @endif

              @if( get_post_meta(get_the_ID(), 'exp_client_source_type', true) )
              <li class="list-group-item">
                <strong>Src type: </strong>{{ get_post_meta(get_the_ID(), 'exp_client_source_type', true) }}
              </li>
              @endif
              
              @if( get_post_meta(get_the_ID(), 'exp_client_source', true) )
              <li class="list-group-item">
                <a href="{{ esc_url(get_post_meta(get_the_ID(), 'exp_client_source', true)) }}" target="_blank">Source</a>                  
              </li>
              @endif
              
              @if( get_post_meta(get_the_ID(), 'exp_client_official_website', true) )
              <li class="list-group-item">
                <a href="{{ esc_url(get_post_meta(get_the_ID(), 'exp_client_official_website', true)) }}" target="_blank">Catalog</a>                
              </li>
              @endif

              @if ( get_post_meta(get_the_ID(), 'exp_client_number_employees', true) )
                <li class="list-group-item"> 
                  <strong>Employees: </strong> {{ get_post_meta(get_the_ID(), 'exp_client_number_employees', true) }}
                </li>
              @endif

              @if ( get_post_meta(get_the_ID(), 'exp_client_branches', true) )
                <li class="list-group-item">
                  <strong>Has branches: </strong> {{ get_post_meta(get_the_ID(), 'exp_client_branches', true) }}
                </li>
              @endif
              
              @if ( get_post_meta(get_the_ID(), 'exp_client_number_branches', true) )
              <li class="list-group-item">
                <strong>Number of branches: </strong> {{ get_post_meta(get_the_ID(), 'exp_client_number_branches', true) }}
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>

      <div class="row pv3">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
          @php(the_content())
          {!! get_the_term_list( get_the_ID(), 'post_tag', 'tags:', ',', '' ) !!}
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
          {!! get_the_term_list( get_the_ID(), 'category', '', ', ', '' ) !!}
        </div>
      </div>

      @include('clients/countries')

      @include('clients/taxonomies')

      @include('clients/contacts')
    </div>
  </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>