<?php
/*
Template Name: Application Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row application">

  <h1 class="center">Apply to Become a Member of The Foundation</h1>
  <h2 class="center">Build A Profitable Web Company In 6 Months Even If You Have No Idea What To Start Or How To Code</h2>
<!--   <ol class="application-steps">
    <li class="active">Apply</li>
    <li>Confirm &amp; Await Approval</li>
  </ol> -->

  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h2 class="apply-now">Apply Now!</h2>
    <div class="postcard">
    <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>

   


  </div>

</div>

<?php get_footer(); ?>
  