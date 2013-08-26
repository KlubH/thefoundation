<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<header class="site-header scroll-nav">
  <?php get_template_part( 'nav' ); ?>
</header>

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
    <section class="container text center">
      <h2 class="sep"><?php echo $headline_cta; ?></h2>
      <?php get_template_part('component', 'optin'); ?>
    </section>
<div id="overlay"></div>
<?php get_footer(); ?>