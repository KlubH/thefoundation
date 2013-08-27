<?php
/*
Template Name: Centered Full-width  Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container center scroll-page row sign-up-thanks">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

  <?php endwhile; ?>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
