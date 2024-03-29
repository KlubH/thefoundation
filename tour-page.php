<?php
/*
Template Name: Tour Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<?php
    $hero_text = get_post_meta( $post->ID, '_cmb_home_hero_text', true );
    $hero_video_link = get_post_meta( $post->ID, '_cmb_home_hero_video', true ); ?>

    <!-- @component SITE HEADER | @component HERO -->

    <section class="hero container fixed-scroll-page">
      <div class="row">
        <h1><?php echo $hero_text; ?></h1>
      </div>

      <div id="video-modal" class="homepage-video">
        <?php echo $hero_video_link; ?>
      </div>

      <div id="optin-source">
       <?php get_template_part('component', 'optin-video'); ?>
      </div>
    </section>

  <!-- @component HOME CONTENT -->
  <section class="home-content">
    <div class="container text">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
        <?php get_template_part('component', 'intro'); ?>
      <?php endwhile; ?>
      <?php endif; ?>
      <h2 class="sep"><?php echo $headline_press; ?></h2>

      <?php get_template_part('component', 'pressfeatures'); ?>

      <h2 class="sep"><?php echo $headline_case; ?></h2>

      <?php get_template_part('component', 'casestudies'); ?>

      <h2 class="sep"><?php echo $headline_testimonials; ?></h2>

      <?php get_template_part('component', 'testimonials'); ?>

    </div>

  </section>

  <div class="container text">
    <h2 class="sep"><?php echo $headline_recent; ?></h2>
    <?php get_template_part('component', 'recent'); ?>
  </div>

  <!-- @component OPTIN -->
  <section class="container text center tour-page">
    <h2 class="sep"><?php echo $headline_cta; ?></h2>
    <?php get_template_part('component', 'optin'); ?>
  </section>

<div id="overlay"></div>
<?php get_footer(); ?>