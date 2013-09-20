<?php
  $col1_header = get_post_meta( $post->ID, '_cmb_home_column1_header', true );
  $col1_content = get_post_meta( $post->ID, '_cmb_home_column1_content', true );
  $col2_header = get_post_meta( $post->ID, '_cmb_home_column2_header', true );
  $col2_content = get_post_meta( $post->ID, '_cmb_home_column2_content', true );
  $col3_header = get_post_meta( $post->ID, '_cmb_home_column3_header', true );
  $col3_content = get_post_meta( $post->ID, '_cmb_home_column3_content', true );  ?>

  <div class="intro"><?php the_content(); ?></div>

  <div class="row">
    <div class="grid-third">
      <h3><span class="red-icon"><img src="<?php bloginfo('template_directory'); ?>/images/heart.png"></span><?php echo $col1_header; ?></h3>
      <p><?php echo $col1_content; ?></p>
    </div>
    <div class="grid-third">
      <h3><span class="red-icon"><img src="<?php bloginfo('template_directory'); ?>/images/person.png"></span><?php echo $col2_header; ?></h3>
      <p><?php echo $col2_content; ?></p>
    </div>
    <div class="grid-third">
      <h3><span class="red-icon"><img src="<?php bloginfo('template_directory'); ?>/images/star.png"></span><?php echo $col3_header; ?></h3>
      <p><?php echo $col3_content; ?></p>
    </div>
  </div>