<?php
/*
Template Name: Action Guides Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row">

  <h1><?php the_title(); ?></h1>
  
  <?php
  $ag_args = array(
    'post_type' => 'action-guide'
  );
  $action_guides = new WP_Query($ag_args);

  if ($action_guides->have_posts()) {while ($action_guides->have_posts()) {$action_guides->the_post();
    $cover_image = get_post_meta( $post->ID, '_cmb_cover_image', true );
    $download_link = get_post_meta( $post->ID, '_cmb_pdf_download', true );
  ?>

  <ul class="action-guides">
    <li class="media">
      <div class="media-image">
        <img src="<?php echo $cover_image; ?>" />        
      </div>
      <div class="media-content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <a class="btn-red" href="<?php echo $download_link; ?>" download>Download</a>        
      </div>
    </li>
  </ul>


  <?php }} ?>

</div>

<?php get_footer(); ?>
  