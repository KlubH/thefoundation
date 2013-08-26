<?php
/*
Template Name: Thank You Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row application">
  <ol class="application-steps second-step">
    <li>Apply</li>
    <li class="active">Confirm &amp; Await Approval</li>
  </ol>

  <h1 class="center">You are Almost Done.</h1>
  <h2 class="center">Check Your Email Now To Confirm Your Application</h2>

  <div class="center">
	  <div id="fb-root"></div>
	  <script>(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=209982189069231";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));</script>
	  
	  <div class="fb-like-box" data-href="https://www.facebook.com/TheFoundation.io" data-width="400" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
  </div>

  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    

    <?php the_content(); ?>

  <?php endwhile; endif; ?>

   


  </div>

</div>

<?php get_footer(); ?>
  