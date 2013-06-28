<?php /* Template Name: Partner Page */ ?>

<?php get_header(); ?>
<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container center scroll-page row partners">
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
</div>




<?php get_footer(); ?>

