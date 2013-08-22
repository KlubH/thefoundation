<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container row scroll-page">

  <!-- @component CONTENT -->
  <section class="content grid-wide blog-archive">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      
      <!-- @component BLOG | @component POST -->    
      <article class="post blog-post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="comment-count"><span class="right"><a href="<?php echo get_comments_link(); ?>"><a href="<?php echo get_comments_link(); ?>"><?php comments_number( 'No comments yet', '1 comment', '% comments' ); ?></a></span></p>
        <div class="text">
          <?php the_content('Read More &rarr;'); ?>
        </div>
        <!-- @component META -->
        <section class="meta">
          <h4>By <?php the_author_posts_link(); ?> on <?php the_time('d/m/y'); ?></h4>       
        </section>
      </article>

    <?php endwhile; ?>

      <!-- @component CONTENT NAV -->
      <nav class="content-nav">
        <?php posts_nav_link(' &#183; ', '&larr; Newer Posts', 'Older Posts &rarr;'); ?>
      </nav>

    <?php endif; ?>

  </section>

  <!-- @component SIDEBAR -->
  <aside class="sidebar grid-narrow">
    <?php get_sidebar(); ?>
  </aside>
</div>


<?php get_footer(); ?>
  