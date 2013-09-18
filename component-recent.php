<!-- @component RECENT | @component POSTS -->

<div class="row recent posts">

  <div class="grid-half">

    <h3>Recent Blog Posts</h3>
    <?php
      $home_args4 = array(
        'post_type' => 'post',
        'posts_per_page' => '5'
      );
      $blogs = new WP_Query($home_args4);
      if ($blogs->have_posts()) {while ($blogs->have_posts()) {$blogs->the_post(); ?>

        <article class="post preview blog">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php
            global $more;
            $more = 0;
            the_excerpt();
           ?>
        </article>

    <?php }} ?>

    <p class="more-posts"><strong>There are plenty more posts on our <a href="<?php bloginfo('url'); ?>/blog">Blog &rarr; </a></strong></p>

  </div>

  <div class="grid-half">

    <h3>Latest Podcasts</h3>
    <?php
        $home_args5 = array(
          'post_type' => 'podcast',
          'posts_per_page' => '5'
        );
        $blogs = new WP_Query($home_args5);
        if ($blogs->have_posts()) {while ($blogs->have_posts()) {$blogs->the_post(); ?>

        <article class="post preview podcast">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php
            global $more;
            $more = 0;
            the_excerpt();
           ?>
        </article>

    <?php } ?>

    <p class="more-posts"><strong>Listen in on a great selection of <a href="<?php bloginfo('url'); ?>/podcasts">Podcasts &rarr; </a></strong></p>

    <?php } else {echo "No podcasts yet"; } ?>

  </div>

</div>