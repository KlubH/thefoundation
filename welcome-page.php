<?php /* Template Name: BlogLanding */ ?>
<?php
if (isset($_POST["url"])) {
	$url=$_POST["url"];
	$url=str_replace("http://","",$url);
	$url=str_replace(site_url() . '/welcome',"",$url);
	$url="http://$url";
} else {
	$url= site_url() . '/blog';
}

if (isset($_POST["title"])) {
	$title=$_POST["title"];
} else {
	$title="Sam Ovens Case Study: How To Build A Web Based Product Without Any Idea, Limited Cash, Or Development Experience";
}

$url_r=str_replace("http://","",$url);

?>
<?php get_header(); ?>
<header class="welcomegate-header">
	<div class="container cf">
		<a class="logo-inverse pull-l" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_inverse.png" /></a>
		<div class="pull-r">
			<p>We've been featured by these guys:</p>
			<img src="<?php bloginfo('template_url'); ?>/images/logos.png" />
		</div>
	</div>
</header>

<div class="container welcomegate-content">
	<div class="lead center">
		<p>It looks like you're about to access</p>
		<h1><?php echo $title; ?></h1>
	</div>
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
    $form_code = get_post_meta( $post->ID, '_cmb_optin_embed', true );
?>
 <!-- @component OPTIN -->
<div class="optin home-optin lead">
	<p>Confirm your email to get access</p>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/smoothness/jquery-ui.css" type="text/css" /><link rel="stylesheet" href="//www1.moon-ray.com/v2.4/include/formEditor/gencss.php?uid=p2c7381f14" type="text/css" /><script type="text/javascript" src="//www1.moon-ray.com/v2.4/include/formEditor/genjs-v2.php?html=false&uid=p2c7381f14"></script>
					<form class="moonray-form-clearfix" action="https://forms.moon-ray.com/v2.4/form_processor.php?" method="post">
					<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email"><input name="email" type="email" class="moonray-form-input" id="mr-field-element-6871664430" required value placeholder="You@domain.com"/></div>
					<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-image"><input type="submit" name="submit" value="Send Now" class="moonray-form-input" id="mr-field-element-684993176953"\ data-lastDisplayVal="&quot;Submit&quot;"/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="redirect" type="hidden" value="http://thefoundation.io/blog-redirect.php?a=<? echo $url_r; ?>"/></div>
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

<div class="container welcomegate-testimonials landing-testimonials">
	<!-- @component TESTIMONIALS -->
<div class="row testimonials">            
<?php
    $home_args3 = array(
      'post_type' => 'testimonial', 
      'posts_per_page' => '3'
    );
    $testimonials = new WP_Query($home_args3);
    if ($testimonials->have_posts()) {while ($testimonials->have_posts()) {$testimonials->the_post();
      $testimonial_content = get_post_meta( $post->ID, '_cmb_testimonial_quote', true );
      $testimonial_source_name = get_post_meta( $post->ID, '_cmb_testimonial_source_name', true );
      $testimonial_source_title = get_post_meta( $post->ID, '_cmb_testimonial_source_title', true );
  ?>
  
    <div class="grid-third">
      <div class="testimonial">
        <blockquote><?php echo $testimonial_content; ?></blockquote>
        <cite>
          <strong><?php echo $testimonial_source_name; ?></strong>
          <?php echo $testimonial_source_title; ?>
        </cite>
      </div>
      <div class="bordered-image"><?php the_post_thumbnail('testimonial'); ?></div>
    </div>

  <?php }} ?>
</div>
<p class="skip">
	or you can <a href="<?php echo $url; ?>">Skip this step &rarr;</a>
</p>
</div>

<?php get_footer(); ?>

