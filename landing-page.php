<?php /* Template Name: Landing Page */ ?>
<!doctype html>
<html  xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="The most important word for success in entrepreneurship is 14 letters. Do you know what it is?">
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript"> var templateDir = "<?php bloginfo('template_directory') ?>"; </script>
  <script type="text/javascript" src="//use.typekit.net/xlc6nxv.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/main.css?v=7" />
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
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-41780843-1', 'thefoundation.com');
    ga('send', 'pageview');

  </script>
  <!-- End Visual Website Optimizer Asynchronous Code -->
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

<header class="welcomegate-header">
	<div class="container cf">
		<a class="logo-inverse pull-l" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_inverse.png" /></a>
	</div>
</header>

<div class="container landingpage-content">
    <div class="lead">
      <h1><?php echo the_title(); ?></h1>
    </div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
  <div class="container">
      <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

<div class="container welcomegate-optin">
	<?php
  $optin_args = array(
    'post_type' => 'component',
    'tax_query' => array(
      array(
        'taxonomy' => 'component-type',
        'field' => 'slug',
        'terms' => 'get-case-study'
      )
    )
  );
  $optin = new WP_Query($optin_args);
  if ($optin->have_posts()) {while ($optin->have_posts()) {$optin->the_post();
    $form_code = get_post_meta( $post->ID, '_cmb_optin_embed', true ); ?>

    <!-- @component OPTIN -->
    <div class="optin home-optin lead">
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/smoothness/jquery-ui.css" type="text/css" /><link rel="stylesheet" href="//www1.moon-ray.com/v2.4/include/formEditor/gencss.php?uid=p2c7381f14" type="text/css" /><script type="text/javascript" src="//www1.moon-ray.com/v2.4/include/formEditor/genjs-v2.php?html=false&uid=p2c7381f14"></script>
      <form class="moonray-form-clearfix ga_submit pa_optin" rel="opt-in;opt-in;landing-page" action="https://forms.moon-ray.com/v2.4/form_processor.php?" method="post">
        <div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email"><input name="email" type="email" class="moonray-form-input" id="mr-field-element-6871664430" required value placeholder="You@domain.com"/></div>
        <div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-image"><input type="submit" name="submit" value="Send Now" class="moonray-form-input" id="mr-field-element-684993176953"\ data-lastDisplayVal="&quot;Submit&quot;"/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="redirect" type="hidden" value="http://thefoundation.com/blog-redirect.php?a=<? echo $url_r; ?>"/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="afft_" type="hidden" value/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="aff_" type="hidden" value/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="sess_" type="hidden" value/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="ref_" type="hidden" value/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="own_" type="hidden" value/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="oprid" type="hidden" value/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="contact_id" type="hidden" value/></div>
        <div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="uid" type="hidden" value="p2c7381f14"/></div>
        <span class="moonray-form-clearfix"></span>
      </form>
    </div>

<?php }} ?>
</div>
<div class="center">
		<div class="landing-featured">We've been featured by these guys:</div>
    <img src="<?php bloginfo('template_url'); ?>/images/logos-inverted.png" />
</div>

<?php get_footer(); ?>

