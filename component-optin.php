<?php
  $optin_args = array(
    'post_type' => 'component', 
    'tax_query' => array(
      array(
        'taxonomy' => 'component-type',
        'field' => 'slug',
        'terms' => 'get-case-study'
      )
      )
  );
  $optin = new WP_Query($optin_args);
  if ($optin->have_posts()) {while ($optin->have_posts()) {$optin->the_post();
    $form_code = get_post_meta( $post->ID, '_cmb_optin_embed', true );
?>
 <!-- @component OPTIN -->
<div class="optin home-optin">
  <?php the_content(); ?>
  <?php echo $form_code; ?>
</div>

<?php }} ?>