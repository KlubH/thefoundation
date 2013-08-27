<div class="row press-features">
  <?php
    $home_args1 = array(
      'post_type' => 'press-feature',
      'posts_per_page' => '10',
      'orderby' => 'menu_order'
    );
    $press_features = new WP_Query($home_args1);
    if ($press_features->have_posts()) {while ($press_features->have_posts()) {$press_features->the_post();
      $press_link = get_post_meta( $post->ID, '_cmb_press_link', true );
      $press_logo = get_post_meta( $post->ID, '_cmb_press_logo', true ); ?>

      <a class="inline-fifth" href="<?php echo $press_link; ?>"><img src="<?php echo $press_logo; ?>" /></a>

  <?php }} ?>

</div>