<?php
  $vid_optin_args = array(
    'post_type' => 'component',
    'tax_query' => array(
      array(
        'taxonomy' => 'component-type',
        'field' => 'slug',
        'terms' => 'enter-the-contest-video'
      )
    )
  );
  
  $vid_optin = new WP_Query($vid_optin_args);
  if ($vid_optin->have_posts()) {while ($vid_optin->have_posts()) {$vid_optin->the_post();
    $form_code = get_post_meta( $post->ID, '_cmb_optin_embed', true ); ?>

    <!-- @component OPTIN -->
    <div class="optin video-optin">
      <?php the_content(); ?>
      <?php echo $form_code; ?>
    </div>

<?php }} wp_reset_postdata();?>