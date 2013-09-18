<footer class="site-footer">
  <div class="container">
    <div class="pull-l">
      <a class="logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      <p>&copy; <?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved. <a href="<?php bloginfo('url'); ?>/disclosures/">Disclosures</a>.</p>
    </div>
    <nav class="site-footer-nav pull-r">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </nav>
  </div>
</footer>

<script src="//fast.wistia.com/static/iframe-api-v1.js"></script>
<script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/mediaelement.js"></script>
<script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/analytics.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 985258082;
var google_conversion_label = "HiP2CP74hQYQ4rDn1QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"> </script>
<script type="text/javascript">
  (function() {
    window._pa = window._pa || {};
    // _pa.orderId = "myCustomer@email.com"; // OPTIONAL: attach user email or order ID to conversions
    // _pa.revenue = "19.99"; // OPTIONAL: attach dynamic purchase values to conversions
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    pa.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + "//tag.perfectaudience.com/serve/51e157736ebaceada3000002.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
  })();
</script>
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/985258082/?value=0&amp;label=HiP2CP74hQYQ4rDn1QM&amp;guid=ON&amp;script=0"/>
  </div>
</noscript>
<script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
<?php wp_footer(); ?>

