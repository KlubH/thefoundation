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
  <h1 class="center">Check Your Inbox</h1>
  <h2 class="center">We just sent you an email with a link to our private blog. Look for an email from Dane Maxwell.</h2>

  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

  </div>

</div>

<?php get_footer(); ?>
