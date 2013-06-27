<!-- @component SITE NAV -->
<nav class="site-nav container">      
  <a class="logo pull-l" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
  <a href="#" class="mobile-nav-toggle">Menu</a>
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
