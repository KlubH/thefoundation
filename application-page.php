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
  <ol class="application-steps">
    <li class="active">Apply</li>
    <li>Confirm &amp; Await Approval</li>
  </ol>

  <div class="row">
    <div class="grid-wide">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h2 class="apply-now">Apply Now!</h2>
    <div class="postcard">
    <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>

   
      </div>  

    <div class="grid-narrow text">
      <div class="lead"><p>You'll Learn How To Build A Profitable, Recurring Revenue Web Based Product In 6 Months... Even If You Don't Have Any Ideas Or Development Experience.</p></div>
      <p>Limited membership. Not everyone will be accepted. The group will last for 6 months. As a group, we will share the best practices for building a software product from scratch, getting it to 6 figures, and doing it without any outside funding.</p> 
      <p>I've built 6 profitable web based products from scratch, without any outside funding. This is what I want to share. How I did it. If you're a veteran, all the better. All skill levels are welcome to apply. 
      <p>The friendships you form in this group will last you an entire lifetime :-)</p> 
      <p>There is a fee to join. Apply on the left to see if you've got what it takes.</p>
      <p>Your current situation is not important. If you have the mindset, this can be done.</p>
    </div>
  </div>

</div>

<?php get_footer(); ?>
  