<!-- @component CASE STUDIES -->
<div class="row case-studies">
  <?php
    $home_args2 = array(
      'post_type' => 'case-study', 
      'posts_per_page' => '3'
    );
    $case_studies = new WP_Query($home_args2);

  if ($case_studies->have_posts()) {while ($case_studies->have_posts()) {$case_studies->the_post();
  ?>

  <div class="grid-third">
    <div class="bordered-image"><?php the_post_thumbnail('case-study'); ?></div>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
  </div>

<?php }} ?>
</div> 