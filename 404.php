<?php
/*
Template Name: 404 Page
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row application">

  <h1 class="center">Woops!</h1>
  <h2 class="center">Looks like the page you tried to access doesn't exist.</h2>
  <p class="center">In the meantime, you can <a onclick="history.back()">go back</a> to the page you were at previously, or you can <a href="/">go home</a>.</p>

</div>

<?php get_footer(); ?>
