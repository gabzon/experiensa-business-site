<nav class="navbar navbar-light justify-content-between">
  <div class="container">
    <a class="navbar-brand" href="{{ home_url('/') }}">
      @if ( get_stylesheet_directory_uri() . '/assets/images/logo-experiensa.png' )
        <img src="{{ get_stylesheet_directory_uri() . '/assets/images/logo-experiensa.png' }}" alt="logo experiensa" width="200" class="dib br-100">
      @else
        {{ get_bloginfo('name', 'display') }}
      @endif
    </a>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav my-2 my-sm-0 mr-sm-2']) !!}
    @endif
  </div>
</nav>
