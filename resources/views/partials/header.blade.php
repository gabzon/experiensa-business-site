{{-- https://gist.github.com/smutek/cd95c8bc4f1db70ee1eda2740bfbf6fd --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a class="brand navbar-brand" href="<?= esc_url(home_url('/')); ?>">
      @if ( get_stylesheet_directory_uri() . '/assets/images/logo-experiensa.png' )
        <img src="{{ get_stylesheet_directory_uri() . '/assets/images/logo-experiensa.png' }}" alt="logo experiensa" width="200" class="dib br-100">
      @else
        {{ get_bloginfo('name', 'display') }}
      @endif
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'nav navbar-nav bg-white']) !!}
      @endif
    </div>
  </div>
</nav>
