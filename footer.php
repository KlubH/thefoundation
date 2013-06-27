<footer class="site-footer">
  <div class="container">
    <div class="pull-l">
      <a class="logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      <p>&copy; <?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.</p>
    </div>
    <nav class="site-footer-nav pull-r">      
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </nav>
  </div>
</footer>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//fast.wistia.com/static/iframe-api-v1.js"></script>
<script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/mediaelement.js"></script>
<script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/socialcount.min.js"></script>
<script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 985258082;
var google_conversion_label = "HiP2CP74hQYQ4rDn1QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/985258082/?value=0&amp;label=HiP2CP74hQYQ4rDn1QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php wp_footer(); ?>

