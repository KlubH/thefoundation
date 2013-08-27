<?php
/*
Template Name: About  Page
*/
?>

<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="scroll-page">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    $timeline_heading = get_post_meta( $post->ID, '_cmb_timeline_header', true );
    $team_heading = get_post_meta( $post->ID, '_cmb_team_header', true );
    $mentors_heading = get_post_meta( $post->ID, '_cmb_mentors_header', true );
    $investors_heading = get_post_meta( $post->ID, '_cmb_investors_header', true ); ?>

    <div class="center about-title">
     <h1><?php the_title(); ?></h1>
    </div>

    <div class="container row about-page page">

    <!-- @component CONTENT -->
    <section class="content grid-wide">

       <div class="text">
         <?php the_content(); ?>
       </div>

    <?php endwhile; ?>
    <?php endif; ?>

      <h2><?php echo $team_heading; ?></h2>
      <div class="people row">
        <?php
          $team_args = array(
            'post_type' => 'team-member'
          );
          $team = new WP_Query($team_args);
          if ($team->have_posts()) {while ($team->have_posts()) {$team->the_post();
            $team_title = get_post_meta( $post->ID, '_cmb_team_title', true );
            $team_link = get_post_meta( $post->ID, '_cmb_team_link', true ); ?>

            <div class="bordered-image grid-fifth popover-trigger">
              <a href="<?php echo $team_link; ?>"><?php the_post_thumbnail(); ?></a>
              <div class="popover">
                <h3><?php the_title(); ?></h3>
                <p><?php echo $team_title; ?></p>
              </div>
            </div>

        <?php }} wp_reset_postdata(); ?>

      </div>

      <h2><?php echo $mentors_heading; ?></h2>

      <div class="people row">
        <?php
          $mentors_args = array(
            'post_type' => 'mentor'
          );
          $mentors = new WP_Query($mentors_args);
          if ($mentors->have_posts()) {while ($mentors->have_posts()) {$mentors->the_post();
            $mentors_link = get_post_meta( $post->ID, '_cmb_team_link', true ); ?>

            <div class="bordered-image grid-fifth popover-trigger">
              <a href="<?php echo $mentors_link; ?>"><?php the_post_thumbnail(); ?></a>
              <div class="popover">
                <h3><?php the_title(); ?></h3>
              </div>
            </div>

          <?php }} wp_reset_postdata(); ?>

      </div>

      <h2><?php echo $investors_heading; ?></h2>

      <div class="people row">
        <?php
          $investors_args = array(
            'post_type' => 'investor'
          );
          $investors = new WP_Query($investors_args);
          if ($investors->have_posts()) {while ($investors->have_posts()) {$investors->the_post();
            $investors_link = get_post_meta( $post->ID, '_cmb_team_link', true );
            $investors_title = get_post_meta( $post->ID, '_cmb_team_title', true ); ?>

            <div class="bordered-image grid-fifth popover-trigger">
              <a href="<?php echo $investors_link; ?>"><?php the_post_thumbnail(); ?></a>
              <div class="popover">
                <h3><?php the_title(); ?></h3>
                <p><?php echo $investors_title; ?></p>
              </div>
            </div>

          <?php }} wp_reset_postdata(); ?>
      </div>

    </section>

    <!-- @component SIDEBAR -->
    <aside class="sidebar grid-narrow">
      <h2><?php echo $timeline_heading; ?></h2>
       <?php
          $timeline_args = array(
            'post_type' => 'timeline-event'
          );
          $events = new WP_Query($timeline_args);
          if ($events->have_posts()) {while ($events->have_posts()) {$events->the_post();
            $event_year = get_post_meta( $post->ID, '_cmb_event_year', true );
            $event_desc = get_post_meta( $post->ID, '_cmb_event_description', true ); ?>

          <div class="timeline-event media">
            <div class="media-image">
              <span><?php echo $event_year; ?></span>
            </div>
            <div class="media-content">
              <h3><?php the_title(); ?></h3>
              <p><?php echo $event_desc; ?></p>
            </div>
          </div>
      <?php }} ?>
    </aside>

  </div>

</div>

<?php get_footer(); ?>