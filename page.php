<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row">

  <!-- @component CONTENT -->
  <section class="content grid-wide post-single blog-single">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      
      <!-- @component BLOG | @component POST -->    
      <article class="post blog-post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="text">
          <?php the_content(""); ?>
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
  