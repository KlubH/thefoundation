 <?php
  $sidebar_args1 = array(
    'post_type' => 'component', 
    'tax_query' => array(
      array(
        'taxonomy' => 'component-type',
        'field' => 'slug',
        'terms' => 'join-the-foundation'
      )
      )
  );
  $join = new WP_Query($sidebar_args1);
  if ($join->have_posts()) {while ($join->have_posts()) {$join->the_post();
   $apply_link = get_post_meta( $post->ID, '_cmb_apply_link', true );
?>

  <div class="widget fancy-widget join-widget">
    <h2>Join the Foundation</h2>
    <div class="widget-content">
      <?php the_content(); ?>
      <a class="btn-green" href="<?php echo $apply_link; ?>" id="applynow" rel="application-click;sidebar;<?php echo basename($_SERVER['REQUEST_URI']); ?>">Apply Now</a>
    </div>
  </div>

  <?php }} ?>

  <div class="widget fancy-widget optin-widget">
    <?php get_template_part('component', 'optin-sidebar'); ?>
  </div>

  <?php dynamic_sidebar( 'main-sidebar' ); ?>