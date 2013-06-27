  <?php
  $actionguide_args = array(
    'post_type' => 'component', 
    'tax_query' => array(
      array(
        'taxonomy' => 'component-type',
        'field' => 'slug',
        'terms' => 'get-action-guide'
      )
    )
  );
  $actionguide = new WP_Query($actionguide_args);
  if ($actionguide->have_posts()) {while ($actionguide->have_posts()) {$actionguide->the_post();
    $form_code = get_post_meta( $post->ID, '_cmb_ag_code', true );
?>
  <?php the_content(); ?>
  <?php echo $form_code; ?>

<?php }} ?>