<header class="banner bg-light">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
      @if (has_nav_menu('primary_navigation'))
        <a class="navbar-brand" href="#">
          <img class="navbar-brand" src="@asset('images/vignet-tromp-2017-medium.png')" alt="{{ get_bloginfo('name', 'display') }}" height="44" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
          <span class="navbar-toggler-icon"></span>
        </button>

        {{-- <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
        {!! wp_nav_menu( array(
            'theme_location'    => 'primary_navigation',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
        !!}
      @endif
    </nav>
    <!-- OLD MENU
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    -->
  </div>
</header>
