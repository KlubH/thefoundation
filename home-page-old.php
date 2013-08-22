<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<header class="site-header home-mobile-nav">
  <?php get_template_part( 'nav' ); ?>
</header>

<?php 
  if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $hero_text = get_post_meta( $post->ID, '_cmb_home_hero_text', true );
    $hero_video_link = get_post_meta( $post->ID, '_cmb_home_hero_video', true ); 
    $headline_press = get_post_meta( $post->ID, '_cmb_home_headline_press', true);
    $headline_case = get_post_meta( $post->ID, '_cmb_home_headline_case_studies', true);
    $headline_testimonials = get_post_meta( $post->ID, '_cmb_home_headline_testimonials', true);
    $headline_recent = get_post_meta( $post->ID, '_cmb_home_headline_recent', true);
    $headline_cta = get_post_meta( $post->ID, '_cmb_home_headline_cta', true);
    ?>

    <!-- @component SITE HEADER | @component HERO -->
    <section class="hero container">
      <div class="row">
          <h1><?php echo $hero_text; ?></h1>          
        <!-- @component DISCOVER VIDEO -->
    
     </div>    
 
     <div id="video-modal" class="tour-video">
       <?php echo $hero_video_link; ?>
     </div>

      <?php endwhile; ?>
      <?php endif; ?>
      
      <div id="optin-source">        
        <?php get_template_part('component', 'optin-video'); ?>
      </div>

    </section>

    <div class="home-nav" id="js-header">
      <?php get_template_part( 'nav' ); ?>
    </div> 

    <!-- @component HOME CONTENT -->
    <section class="home-content">
      <div class="container text">               
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
          <?php get_template_part('component', 'intro'); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      
        <h2><?php echo $headline_press; ?></h2>

        <?php get_template_part('component', 'pressfeatures'); ?>

        <h2><?php echo $headline_case; ?></h2>
        
        <?php get_template_part('component', 'casestudies'); ?>               
        
        <h2><?php echo $headline_testimonials; ?></h2>

        <?php get_template_part('component', 'testimonials'); ?>
                       

      </div>

    </section>
    
    <div class="container text">
      <h2><?php echo $headline_recent; ?></h2>
      <?php get_template_part('component', 'recent'); ?>
    </div> 

    <!-- @component OPTIN -->
    <section class="container text center">
      <h2><?php echo $headline_cta; ?></h2>
      <?php get_template_part('component', 'optin'); ?>
    </section>
<div id="overlay"></div>
<?php get_footer(); ?>