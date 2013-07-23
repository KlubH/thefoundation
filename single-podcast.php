<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container row scroll-page">

  <!-- @component CONTENT -->
  <section class="content grid-wide post-single podcast-single">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
      $embed_code = get_post_meta( $post->ID, '_cmb_podcast_video_embed', true );
      $audio = get_post_meta( $post->ID, '_cmb_podcast_audio_embed', true );
      $audio_dl = get_post_meta( $post->ID, '_cmb_podcast_audio_dl', true );
      $open_itunes_link = get_post_meta( $post->ID, '_cmb_podcast_itunes_link', true );
      $download_link = get_post_meta( $post->ID, '_cmb_podcast_download_link', true );
      $podcast_intro = get_post_meta( $post->ID, '_cmb_podcast_video_intro', true );
      $book_cover = get_post_meta( $post->ID, '_cmb_podcast_book_cover', true );
      $hide_guide = get_post_meta( $post->ID, '_cmb_hide_action_guide', true );
    ?> 
  
     <h1><?php the_title(); ?></h1>
    <!-- @module BUTTON GROUP -->
     <div class="button-group">
        <a href="#" data-state="paused"  class="btn-light btn-play show-audio">Play Podcast</a>
      <a href="<?php echo $open_itunes_link; ?>" target="itunes_store" class="btn-light">Open in iTunes</a>
     </div>

    <?php if( function_exists('powerpress_get_enclosure_data') ) {
      $EpisodeData = powerpress_get_enclosure_data($post->ID);
        if( $EpisodeData ) {
          $audio_url = $EpisodeData['url'];
        }
      } 
    ?>
    <div class="audio text">
      <audio id="audio-player" src="<?php echo $audio_url; ?>" type="audio/mp3" controls="controls"></audio>
      <p>To download the MP3, we recommend subscribing on itunes for the best experience. Or, if you're in a hurry and want the MP3 without visiting iTunes, <a href="<?php echo $audio_dl; ?>" download>download it here.</a></p>
    </div>
      
      <!-- @module LEAD -->
      <div class="lead">
        <p><?php echo $podcast_intro; ?></p>
      </div>    

      <!-- @component VIDEO -->
      <div class="video">
        <?php echo $embed_code; ?>
      </div> 
      

      <?php endwhile; ?>
      <?php endif; ?>
    
      <!-- @component ACTION GUIDE -->
      <?php if ($hide_guide == false) { ?>
      <div class="action-guide">
        <?php if (isset($book_cover)) { ?>
          <img src="<?php echo $book_cover; ?>" />
        <?php } else { ?>
          <img src="<?php bloginfo('template_directory');?>/images/action_guide.png" />
        <?php } ?>
        <?php get_template_part('component', 'actionguide'); ?>
      </div>
      <?php } ?>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <div class="text">
         <?php the_content(); ?>
      </div>

      <a class="btn-red" href="<?php echo $download_link; ?>" download>Download the Transcript for this Podcast</a>
      
      <?php if (function_exists('sharethis_button')) { sharethis_button(); } ?>

      <!-- @component META -->
      <section class="meta">
        <h4>By <?php the_author_posts_link(); ?> on <?php the_time('d/m/y'); ?></h4> 
        <div class="media media-author">
          <div class="media-image bordered-image">
            <?php echo get_avatar( get_the_author_meta('ID'), 70 ); ?>
          </div>
          <div class="media-content">        
            <h3><?php the_author(); ?></h3>    
            <p><?php the_author_meta('user_description'); ?></p>
          </div>
        </div>
      </section>

      <!-- @component CONTENT NAV -->
      <nav class="content-nav">
        <div class="pull-l"><?php previous_post_link('%link', '&larr; Previous Podcast'); ?></div>
        <div class="pull-r"><?php next_post_link('%link', 'Next Podcast &rarr;'); ?></div>
      </nav>

    <?php endwhile; ?>
    <?php comments_template( '', true ); ?>
    <?php endif; ?>

  </section>

  <!-- @component SIDEBAR -->
  <aside class="sidebar grid-narrow">    
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>
