<?php
/*
Template Name: Thank You (for Landing Page)
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row application">
  <h1 class="center">You Are Almost Done.</h1>
  <h2 class="center">Check your email now and click the confirmation link for your free gift.</h2>

  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

  </div>

</div>

<?php get_footer(); ?>
