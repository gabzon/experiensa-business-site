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
$coordenates = get_post_meta(get_the_ID(), 'exp_client_latitude', true) . ',' . get_post_meta(get_the_ID(),
'exp_client_longitude', true);
$contacts = get_post_meta(get_the_ID(), 'exp_client_contact') ;
@endphp


<article @php(post_class())>

  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="card">
        <img class="card-img-top" src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}">
        <div class="card-body">
          <h5 class="card-title">{{ get_the_title() }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">
            @if ( get_post_meta(get_the_ID(), 'exp_client_state', true) )
              {{ get_post_meta(get_the_ID(), 'exp_client_state', true) }} ,
            @endif
             {{ $country }}
          </h6>
        </div>
        <ul class="list-group list-group-flush">
          @if ( get_post_meta(get_the_ID(), 'exp_client_email', true) )
            <small>        
                <li class="list-group-item"><i class="fas fa-envelope"></i>
                  {{ get_post_meta(get_the_ID(), 'exp_client_email', true) }}
                </li>    
            </small>          
          @endif

          @if ( get_post_meta(get_the_ID(), 'exp_client_phone', true) )
            <li class="list-group-item"><i class="fas fa-phone"></i>
              {{ get_post_meta(get_the_ID(), 'exp_client_phone', true) }}
            </li>              
          @endif

          @if ( get_post_meta(get_the_ID(), 'exp_client_website', true) )
            <li class="list-group-item">
              <i class="fas fa-globe"></i> 
              <a href="{{ esc_url( get_post_meta(get_the_ID(), 'exp_client_website', true) ) }}" target="_blank">website</a>
            </li>  
          @endif

          @if ( get_post_meta(get_the_ID(), 'exp_client_status', true) )
          <li class="list-group-item">
              <strong>Status: </strong>{{ get_post_meta(get_the_ID(), 'exp_client_status', true) }}
            </li>
          @endif
        </ul>
        <div class="card-body">
          @include('clients/social')
        </div>
      </div>
      <header>
        <h1 class="entry-title"></h1>
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

      <div class="countries">                    
          {!! get_the_term_list( get_the_ID(), 'exp_country', '<h6>Countries</h6>', ', ', '' ) !!}          
      </div>

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