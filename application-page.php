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
      <h3>Location</h3>
      <p>Take The Foundation virtually from anywhere in the world</p>
      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/globe.png" alt="">
      <h3>Community</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, modi, dignissimos, ad dicta distinctio ea soluta reprehenderit magnam explicabo debitis libero repellendus atque vitae quasi ipsam cumque a. Nihil, doloremque.</p>
      <h3>Starting from Nothing</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, fuga, cumque nostrum error quo explicabo dolore voluptatem odit et a ullam esse similique velit repellat aliquid reiciendis voluptas facere voluptatum!</p>
      <h3>Expert Coaches</h3>
      <h3>Testimonials</h3>
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
  