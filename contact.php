<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row">
  <section class="content grid-wide post-single blog-single contact-form">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <article class="post blog-post">
      <h1><?php the_title(); ?></h1>
      <div class="text postcard">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
  <?php endif; ?>
  </section>
  <!-- @component SIDEBAR -->
  <aside class="sidebar grid-narrow">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>
