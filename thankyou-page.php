<?php
/*
Template Name: Thank You Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row application">
  <ol class="application-steps second-step">
    <li>Apply</li>
    <li class="active">Confirm &amp; Await Approval</li>
  </ol>

  <h1 class="center">You are Almost Done.</h1>
  <h2 class="center">Check Your Email Now To Confirm Your Application</h2>

  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    

    <?php the_content(); ?>

  <?php endwhile; endif; ?>

   


  </div>

</div>

<?php get_footer(); ?>
  