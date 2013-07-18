<?php
/*
Template Name: Application Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row application">

  <h1 class="center">Apply to Become a Member of The Foundation</h1>
  <h2 class="center">Build A Profitable Web Company In 6 Months Even If You Have No Idea What To Start Or How To Code</h2>
  <ol class="application-steps">
    <li class="active">Apply</li>
    <li>Confirm &amp; Await Approval</li>
  </ol>

  <div class="row">
    <div class="grid-wide">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h2 class="apply-now">Apply Now!</h2>
    <div class="postcard">
    <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>

   
      </div>  

    <div class="grid-narrow text application-aside">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/globe.png" alt="">
      <p class="center">Our Students</p>
      <h3>Community</h3>
      <p>Lonely entrepreneur isn't possible inside The Foundation. Students end up becoming best friends, holding live events, and supporting the ha-ell out of each other. You can move through all of the ups and downs of starting a business. Together.</p>
      <h3>Starting from Nothing</h3>
      <p>No idea? No money? No credibility? No product creation experience? Notta problem son! We create companies out of thin air, and show you how.</p> 
      <h3>Expert Coaches</h3>
      <p>Not just any coach. Our expert coaches all have vetted business with paying customers. Many entrepreneurs are stuck with blind spots and need a second perspective. Get live help when you need it.</p>
      <h3>Trusted By Industry Experts</h3>
     <div class="testimonials">
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
        <div class="testimonial">
          <blockquote><?php echo $testimonial_content; ?></blockquote>
          <cite>
            <strong><?php echo $testimonial_source_name; ?></strong>
            <?php echo $testimonial_source_title; ?>
          </cite>
        </div>
        <div class="bordered-image"><?php the_post_thumbnail('testimonial'); ?></div>
    <?php }} ?>
     </div>

    </div>
  </div>

</div>

<?php get_footer(); ?>
  