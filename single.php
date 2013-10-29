<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row">

  <!-- @component CONTENT -->
  <section class="content grid-wide post-single blog-single">
    <div class="sharethis-container">
      <?php if (function_exists('sharethis_button')) { sharethis_button(); } ?>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      $fb_comments_bool = get_post_meta( $post->ID, '_cmb_fb_comments_bool', true );
      $fb_comments_link = get_post_meta( $post->ID, '_cmb_fb_comments_link', true ); ?>

      <!-- @component BLOG | @component POST -->

      <article class="post blog-post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="comment-count no-margin"><span class="right"><a href="<?php echo get_comments_link(); ?>">
          <?php if ($fb_comments_bool == "on") { ?>
            <fb:comments-count href="<?php echo $fb_comments_link; ?>"></fb:comments-count> Comments
          <?php } else { ?>
            <?php comments_number( 'No comments yet', '1 comment', '% comments' ); ?>
          <?php } ?>
        </a></span></p>
        <p class="author-attribution">Post by <?php the_author(); ?></p>
        <div class="text">
          <?php the_content(""); ?>
        </div>
        <?php// get_template_part('component', 'socialcount'); ?>
        <div class="share-section">
          <div class="diggin-this-graphic"><div class="text">You diggin this? :-)</div><img src="http://www.thefoundation.com/wp-content/themes/thefoundation/images/red-arrow.png"></div>
          <?php if (function_exists('sharethis_button')) { sharethis_button(); } ?>
        </div>
      </article>

    <?php endwhile; ?>

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
        <div class="fb-comments" data-href="<?php echo $fb_comments_link; ?>" data-width="525" data-num-posts="4"></div>

      <?php } else {?>
        <?php comments_template( '', true ); ?>
      <?php } ?>

    <?php endif; ?>

  </section>

  <!-- @component SIDEBAR -->
  <aside class="sidebar grid-narrow">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>
