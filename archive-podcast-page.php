<?php
  /*
  Template Name: Podcasts Archive
  */
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container row scroll-page">

  <!-- @component CONTENT -->
  <section class="content grid-wide podcast-archive">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      $itunes_link = get_post_meta( $post->ID, '_cmb_subscribe_itunes_link', true );
      $rss_link = get_post_meta( $post->ID, '_cmb_subscribe_rss_link', true ); ?>

        <h1><?php the_title(); ?></h1>

        <!-- @component PODCAST INTRO -->
        <div class="podcast-intro text lead">
          <div class="pull-l">
            <?php the_content(); ?>
          </div>
          <div class="thumb pull-r">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>

        <!-- @module BUTTON GROUP -->
        <div class="button-group">
          <a href="<?php echo $itunes_link; ?>" class="btn-light ga_click" rel="podcast-click;itunes;">Subscribe on iTunes</a>
          <a href="<?php echo $rss_link; ?>" class="btn-light ga_click" rel="podcast-click;rss;">Subscribe via RSS</a>
        </div>

    <?php endwhile;
      endif; ?>

    <?php
      $podcast_args = array(
        'post_type' => 'podcast'
      );
      $podcasts = new WP_Query($podcast_args);
      if ($podcasts->have_posts()) {while ($podcasts->have_posts()) {$podcasts->the_post(); ?>

        <!-- @component PODCAST | @component POST -->
        <article class="post podcast">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </article>

    <?php }} ?>

  </section>

  <!-- @component SIDEBAR -->
  <aside class="sidebar grid-narrow">
    <?php get_sidebar(); ?>
  </aside>

</div>

<?php get_footer(); ?>