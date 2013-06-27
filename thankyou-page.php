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

  <h1 class="center">Confirm The Application In Your Email Now</h1>
  <ol class="application-steps">
    <li>Apply</li>
    <li class="active">Confirm &amp; Await Approval</li>
  </ol>

  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    

    <?php the_content(); ?>

  <?php endwhile; endif; ?>

   


  </div>

</div>

<?php get_footer(); ?>
  