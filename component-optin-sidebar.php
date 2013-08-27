<?php
  $optin_side_args = array(
    'post_type' => 'component',
    'tax_query' => array(
      array(
        'taxonomy' => 'component-type',
        'field' => 'slug',
        'terms' => 'get-case-study-sidebar'
      )
    )
  );
  $optin_side = new WP_Query($optin_side_args);
  if ($optin_side->have_posts()) {while ($optin_side->have_posts()) {$optin_side->the_post();
    $form_code = get_post_meta( $post->ID, '_cmb_optin_embed', true ); ?>

    <!-- @component OPTIN -->
    <div class="optin home-optin sidebar-optin">
      <?php the_content(); ?>
      <?php echo $form_code; ?>
    </div>

<?php }} ?>