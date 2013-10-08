<?php
/*
Template Name: Contest Page
*/
?>
<?php get_header(); ?>

<header class="site-header scroll-nav">
  <!-- @component SITE NAV -->
  <nav class="site-nav container">      
    <a class="logo pull-l" href="<?php bloginfo('url'); ?>/contest/"><?php bloginfo('name'); ?></a>
    <a href="#" class="mobile-nav-toggle">Menu</a>
    <?php wp_nav_menu( array( 'theme_location' => 'contest-menu' ) ); ?>
  </nav>
</header>

<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    $hero_text = get_post_meta( $post->ID, '_cmb_contest_hero_text', true );
    $hero_video_link = get_post_meta( $post->ID, '_cmb_contest_hero_video', true ); ?>

    <!-- @component SITE HEADER | @component HERO -->

    <section class="hero container">
      <div class="row">
        <h1><?php echo $hero_text; ?></h1>
        <?php $contestEnd = strtotime('November 2nd 2013 CST'); ?>
        <?php $secondsLeft = $contestEnd > time() ? $contestEnd - time() : 0; ?>
        <p class="countdown" data-secondsleft="<?php echo $secondsLeft; ?>">
          <span class="title">Contest ends in</span> 
          <span class="counter days"><em><?php echo floor($secondsLeft / 86400); ?></em> Days</span> 
          <span class="counter hours"><em><?php echo floor(($secondsLeft % 86400) / 3600); ?></em> Hours</span>
          <span class="counter minutes"><em><?php echo floor(($secondsLeft % 3600) / 60); ?></em> Minutes</span>
          <span class="counter seconds"><em><?php echo $secondsLeft % 60; ?></em> Seconds</span>
        </p>
      </div>

      <div id="video-modal" class="contest-video">
        <?php echo $hero_video_link; ?>
      </div>

      <div id="optin-source" class="contest">
       <?php get_template_part('component', 'optin-contest-video'); ?>
      </div>
    </section>
    

<section class="container home-social cf">
  <span class='st_facebook_hcount' displayText='Facebook'></span>
  <span class='st_twitter_hcount' displayText='Tweet'></span>
  <span class='st_plusone_hcount' displayText='Google +1'></span>
  <span class='st_fblike_hcount' displayText='Facebook Like'></span>
  <span class='st_fbsend_hcount' displayText='Facebook Send'></span>
</section>

<section class="container home-social cf">
  <section class="grid-wide">
  <?php endwhile; ?>
    <?php comments_template( '', true ); ?>
  <?php endif; ?>
</section>

<div class="grid-narrow">

<!-- @component TESTIMONIALS -->
  <div class="row testimonials text landing-testimonials">
  <?php
    $home_args3 = array(
      'post_type' => 'testimonial',
      'posts_per_page' => '3'
    );
    $testimonials = new WP_Query($home_args3);
    if ($testimonials->have_posts()) {while ($testimonials->have_posts()) {$testimonials->the_post();
      $testimonial_content = get_post_meta( $post->ID, '_cmb_testimonial_quote', true );
      $testimonial_source_name = get_post_meta( $post->ID, '_cmb_testimonial_source_name', true );
      $testimonial_source_title = get_post_meta( $post->ID, '_cmb_testimonial_source_title', true ); ?>

      <div class="testmonials">
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

</div>

</section>

<div id="overlay"></div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "0f39efe1-7c43-4cec-bbdb-46de45d99b62", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>