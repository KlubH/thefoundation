<!-- @component TESTIMONIALS -->
<div class="row testimonials">

  <?php
    $home_args3 = array(
      'post_type' => 'testimonial',
      'posts_per_page' => '3'
    );
    $testimonials = new WP_Query($home_args3);
    if ($testimonials->have_posts()) {while ($testimonials->have_posts()) {$testimonials->the_post();
      $testimonial_content = get_post_meta( $post->ID, '_cmb_testimonial_quote', true );
      $testimonial_source_name = get_post_meta( $post->ID, '_cmb_testimonial_source_name', true );
      $testimonial_source_title = get_post_meta( $post->ID, '_cmb_testimonial_source_title', true ); ?>

      <div class="grid-third">
        <div class="testimonial">
          <blockquote><?php echo $testimonial_content; ?></blockquote>
          <cite>
            <strong><?php echo $testimonial_source_name; ?></strong>
            <?php echo $testimonial_source_title; ?>
          </cite>
        </div>
        <div class="bordered-image"><?php the_post_thumbnail('testimonial'); ?></div>
      </div>

  <?php }} ?>

</div>
