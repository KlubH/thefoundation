<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container row scroll-page">

  <!-- @component CONTENT -->
  <section class="content grid-wide blog-archive">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <?php
        $fb_comments_bool = get_post_meta( $post->ID, '_cmb_fb_comments_bool', true );
        $fb_comments_link = get_post_meta( $post->ID, '_cmb_fb_comments_link', true );
      ?>
      <!-- @component BLOG | @component POST -->
      <article class="post blog-post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="comment-count"><span class="right"><a href="<?php echo get_comments_link(); ?>">
          <?php if ($fb_comments_bool == "on") { ?>
            <fb:comments-count href="<?php echo $fb_comments_link; ?>"></fb:comments-count>
          <?php } else { ?>
            <?php comments_number( 'No comments yet', '1 comment', '% comments' ); ?>
          <?php } ?>
        </a></span></p>
        <div class="text">
          <?php the_content('Read More &rarr;'); ?>
        </div>
        <!-- @component META -->
        <section class="meta">
          <h4>By <?php the_author(); ?> on <?php the_time('d/m/y'); ?></h4>
        </section>
      </article>

      <?php
       if ($fb_comments_bool == "on") { ?>
        <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=122869331209455";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>

    <?php } ?>
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
