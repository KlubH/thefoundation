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
        
        <?php// get_template_part('component', 'socialcount'); ?>
        <?php if (function_exists('sharethis_button')) { sharethis_button(); } ?>

        <!-- @component META -->
        <section class="meta">
          <h4>By <?php the_author_posts_link(); ?> on <?php the_time('d/m/y'); ?></h4> 
          <div class="media media-author">
            <div class="media-image bordered-image">
              <?php echo get_avatar( get_the_author_meta('ID'), 70 ); ?>
            </div>
            <div class="media-content">        
              <h3><?php the_author(); ?></h3>    
              <p><?php the_author_meta('user_description'); ?></p>
            </div>
          </div>
        </section>

      </article>

    <?php endwhile; ?>

       <!-- @component CONTENT NAV -->
      <nav class="content-nav">
        <div class="pull-l"><?php previous_post_link('%link', '&larr; Previous Post'); ?></div>
        <div class="pull-r"><?php next_post_link('%link', 'Next Post &rarr;'); ?></div>
      </nav>

      <?php comments_template( '', true ); ?>

    <?php endif; ?>

  </section>

  <!-- @component SIDEBAR -->
  <aside class="sidebar grid-narrow">
    <?php get_sidebar(); ?>
  </aside>
</div>


<?php get_footer(); ?>
  