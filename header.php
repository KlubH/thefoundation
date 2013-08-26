<!doctype html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="The most important word for success in entrepreneurship is 14 letters. Do you know what it is?">
  <title><?php if (is_front_page()) { echo "Do You Know The Most Important Word In Business? | " . wp_title(" | ", false, right); echo bloginfo("name"); } else { echo wp_title('', false); echo " | "; echo bloginfo("name"); } ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript">
var templateDir = "<?php bloginfo('template_directory') ?>";
</script>
  <script type="text/javascript" src="//use.typekit.net/xlc6nxv.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/main.css" />
  <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/modernizr.js"></script>
  <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/cookie.js"></script>
  <!--[if (gte IE 6)&(lte IE 8)]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/scripts/selectivizr.min.js"></script>
  <![endif]-->
  <!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=46536,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->

  <meta property="og:title" content="Do you know the most important word in business?">
  <meta property="og:url" content="http://thefoundation.com/">
  <meta property="og:site_name" content="The Foundation">
  <meta property="og:description" content="Training on how to start a lucrative software business even if you don’t have any idea what to build or how to code. We excel at helping entrepreneurs start from nothing.">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/facebook-thefoundation_logo.png">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41780843-1', 'thefoundation.com');
  ga('send', 'pageview');

</script>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php  echo '
    <form name="frm" id="frm" action="' . get_site_url() . '/welcome" method="post">
      <input type="hidden" name="url" value="'.get_permalink().'">
      <input type="hidden" name="title" value="'.get_the_title().'">
    </form>';
    if (is_single()) {

      echo '<script type="text/javascript">
        processCookie();
      </script>';
    } ?>