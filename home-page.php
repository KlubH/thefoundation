<?php
/*
Template Name: Home Page New
*/
?>
<?php get_header(); ?>

<header class="site-header scroll-nav">
  <?php get_template_part( 'nav' ); ?>
</header>

<?php 
  if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $hero_text = get_post_meta( $post->ID, '_cmb_home_hero_text', true );
    $hero_video_link = get_post_meta( $post->ID, '_cmb_home_hero_video', true ); 
    $headline_press = get_post_meta( $post->ID, '_cmb_home_headline_press', true);
    $headline_case = get_post_meta( $post->ID, '_cmb_home_headline_case_studies', true);
    $headline_testimonials = get_post_meta( $post->ID, '_cmb_home_headline_testimonials', true);
    $headline_recent = get_post_meta( $post->ID, '_cmb_home_headline_recent', true);
    $headline_cta = get_post_meta( $post->ID, '_cmb_home_headline_cta', true);
    ?>

    <!-- @component SITE HEADER | @component HERO -->
    <section class="hero container">
      <div class="row">
          <h1><?php echo $hero_text; ?></h1>          
        <!-- @component DISCOVER VIDEO -->
    
     </div>    

     <div id="video-modal" class="homepage-video">
       <?php echo $hero_video_link; ?>
     </div>

      
      <div id="optin-source">        
        <?php get_template_part('component', 'optin-video'); ?>
      </div>

    </section>



    <!-- @module SOCIALCOUNT -->
<?php 

  $start_shares = 4386;
  $start_likes = 334;
  $start_tweets = 203;
  $start_plusses = 83;

  function get_tweets($url) {
    $json_string = file_get_contents('http://urls.api.twitter.com/1/urls/count.json?url=' . $url);
    $json = json_decode($json_string, true);
    return intval( $json['count'] );
  }
  function get_likes($url) {
    $json_string = file_get_contents('http://graph.facebook.com/?id=' . $url);
    $json = json_decode($json_string, true);
    return intval( $json['likes'] );
  }
  function get_shares($url) {
    $json_string = file_get_contents("http://graph.facebook.com/?id=" . $url);
    $json = json_decode($json_string, true);
    return intval($json['shares']);
  }
  function get_plusones($url) {           
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc?key=AIzaSyCKSbrvQasunBoV16zDH9R33D88CeLr9gQ");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"http://thefoundation.com","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    $curl_results = curl_exec ($curl);
    curl_close ($curl);         
    $json = json_decode($curl_results, true);         
    return intval( $json[0]['result']['metadata']['globalCounts']['count'] );
  }

  $link = get_permalink(); 
  $page = "thefoundation.com";

  $shares = get_shares($link) + $start_shares;
  $likes = get_likes($page) + $start_likes;
  $tweets = get_tweets($link) + $start_tweets;
  $plusones = get_plusones($link) + $start_plusses;

  if ($likes < 1) {$likes = "Like";}
  if ($tweets < 1) {$tweets = "Tweet";}
  if ($plusones < 1) {$plusones = "+1";}
?>

<section class="container home-social cf">
  <ul class="socialcount">
    <li class="facebook-share">
      <a href="#"
        onclick="
          window.open(
            'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
            'facebook-share-dialog', 
            'width=626,height=436'); 
          return false;">
        <img src="<?php bloginfo('template_directory'); ?>/images/fb_share_button.png">
      </a>
      <span class="count"><?php echo $shares; ?></span> 
    </li>
    <li class="twitter">
      <a href="https://twitter.com/share" class="twitter-share-button" data-via="" data-count="none">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      <span class="count"><?php echo $tweets; ?></span> 
    </li>   
    <li class="twitter">
       <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <g:plusone size="medium" annotation="none"></g:plusone>
      <span class="count"><?php echo $plusones; ?></span> 
    </li>
    <li><div id="fb-root"></div>
      <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
      <fb:like send="true" width="450" show_faces="false"></fb:like></li>
     </ul>
  </section>

<section class="container home-social cf">
  <section class="grid-wide">


    
      <?php endwhile; ?>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=122869331209455";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class="fb-comments" data-href="http://thefoundation.io/welcomegate/" data-width="500" data-num-posts="4" data-order-by="reverse_time"></div>      
<?php endif; ?>
  </section>
  <div class="grid-narrow">
    <!-- @component TESTIMONIALS -->
<div class="row testimonials landing-testimonials">            
<?php
    $home_args3 = array(
      'post_type' => 'testimonial', 
      'posts_per_page' => '3'
    );
    $testimonials = new WP_Query($home_args3);
    if ($testimonials->have_posts()) {while ($testimonials->have_posts()) {$testimonials->the_post();
      $testimonial_content = get_post_meta( $post->ID, '_cmb_testimonial_quote', true );
      $testimonial_source_name = get_post_meta( $post->ID, '_cmb_testimonial_source_name', true );
      $testimonial_source_title = get_post_meta( $post->ID, '_cmb_testimonial_source_title', true );
  ?>
  
    <div class="testmonials">
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

  </div>
</section>



<div id="overlay"></div>
<?php get_footer(); ?>