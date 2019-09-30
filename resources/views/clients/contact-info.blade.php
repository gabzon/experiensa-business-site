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
            <a href="{{ esc_url( get_post_meta(get_the_ID(), 'exp_client_website', true) ) }}"
                target="_blank">website</a>
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