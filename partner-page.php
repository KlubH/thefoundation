<?php
/* Template Name: Partner Page */
?>

<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page sub-nav">
	<div class="pull-r">
		<a class="btn-red" href="<?php echo get_bloginfo('url'); ?>/affiliate_center">Affiliate Login</a>
	</div>
</div>

<div class="container center row partners">
	<div class="lead center">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			$partner_logos = get_post_meta( $post->ID, '_cmb_partner_logos', true );
  		$hero_video_link = get_post_meta( $post->ID, '_cmb_partner_video_embed', true ); ?>
			<h2><?php the_title(); ?></h2>
			<?php echo $hero_video_link; ?>
			<img src="<?php echo $partner_logos; ?>" />
  		<?php endwhile; ?>
    	<?php endif; ?>
	</div>

	<div class="form center partners-form">
    <div class='moonray_forms moonray_affiliate_signup_form'>
      <form action="https://forms.moon-ray.com/v2.4/form_processor.php?" id="moonray_forms_513" method="post" data-captcha="false">
      <input type="hidden" name="uid" value="p2c7381f3" />
      <input type="hidden" name="contact_id" id="contact_id_513" value="" />
      <input type="hidden" name="redirect" value="http://step5.vip2site.com" />
      <input type="hidden" name="tags" value="" />
      <input type="hidden" name="sequence" value="17;" />
      <input type="hidden" name="owner_" value="1" />
      <input type="hidden" id="afft_513" name="afft_" value="" />
      <input type="hidden" id="aff_513" name="aff_" value="" />
      <input type="hidden" id="sess_513" name="sess_" value="" />
      <input type="hidden" id="ref_513" name="ref_" value="" />
      <input type="hidden" id="own_513" name="own_" value="" />
      <input type="hidden" id="oprid_513" name="oprid" value="" />
      <input type="hidden" name="smartform" value="1">
      <fieldset  class="moonray_form_format_labels_inside">
      <!-- EDITABLE PARTS BELOW -->
      <div class="moonray_form_field_wrapper"><input type="text" name="firstname" value="Name" label="Name" class="moonray_input required text" size="30"/></div><div class="moonray_form_field_wrapper"><input type="text" name="email" value="E-Mail" label="E-Mail" class="moonray_input required text" size="30"/></div><div class="moonray_form_field_wrapper"><input type="text" name="home_phone" value="Phone" label="Phone" class="moonray_input required phone" size="30"/></div><div class="moonray_form_field_wrapper"><input type="text" name="website" value="Website " label="Website " class="moonray_input  text" size="30"/></div><div class="moonray_form_field_wrapper"><textarea name="SiteDescri_220"  rows="4" class="moonray_input ">Site Description</textarea></div><div class="moonray_form_field_wrapper"><input type="text" name="aff_sales" value="List Size or Views Per Month" label="List Size or Views Per Month" class="moonray_input  number" size="30"/></div><div class="moonray_form_field_wrapper"><textarea name="Promote_218"  rows="4" class="moonray_input ">Why do you want to promote the Foundation</textarea></div><div class="moonray_form_field_wrapper"><textarea name="WhyAccept_219"  rows="4" class="moonray_input ">Why should we accept you? (Have fun with this one :D )</textarea></div>
      </fieldset>
      <input type="submit" value="Submit">
      <!-- EDITABLE ENDS (DO NOT EDIT CONTENTS BELOW)-->
      </form>
      <link rel="stylesheet" type="text/css" href="http://forms.moon-ray.com/v2.4/include/minify/?g=moonrayCSS">
      <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJS"></script>
      <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/scripts/moonrayJS/smartform_loader.js?rand=513"></script>
    </div>
  </div>


<?php get_footer(); ?>

<script type="text/javascript">

var el = jQuery('input[type=text], textarea');
  el.focus(function(e) {
    if (e.target.value == e.target.defaultValue)
      e.target.value = '';
  });
  el.blur(function(e) {
    if (e.target.value == '')
      e.target.value = e.target.defaultValue;
  });
</script>