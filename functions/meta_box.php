<?php


/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_cmb_';

  $meta_boxes[] = array(
    'id'         => 'press_fields',
    'title'      => 'Publication Info',
    'pages'      => array( 'press-feature', ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      
      array(
        'name' => 'Publication Link',
        'id'   => $prefix . 'press_link',
        'type' => 'text'
      ),    
      array(
        'name' => 'Publication Logo',
        'id'   => $prefix . 'press_logo',
        'type' => 'file'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'blog_fields',
    'title'      => 'Blog Comments Options',
    'pages'      => array( 'post', ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      
      array(
        'name' => 'Use Facebook Comments?',
        'id'   => $prefix . 'fb_comments_bool',
        'type' => 'checkbox'
      ),    
      array(
        'name' => 'Facebook Comments URL',
        'id'   => $prefix . 'fb_comments_link',
        'type' => 'text'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'join',
    'title'      => 'Application Info',
    'pages'      => array( 'component', ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_on' => array( 
      'key' => 'taxonomy', 
      'value' => array( 
        'component-type' => 'join-the-foundation'
      ) 
    ),
    'show_names' => true, // Show field names on the left
    'fields'     => array(  
      array(
        'name' => 'Application Link',
        'desc' => 'Shown in sidebar for Join the Foudnation component',
        'id'   => $prefix . 'apply_link',
        'type' => 'text'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'actionguide',
    'title'      => 'Action Guide Opt-in Code',
    'pages'      => array( 'component', ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_on' => array( 
      'key' => 'taxonomy', 
      'value' => array( 
        'component-type' => 'get-action-guide'
      ) 
    ),
    'show_names' => true, // Show field names on the left
    'fields'     => array(  
      array(
        'name' => 'Action guide Opt-in Embed code',
        'desc' => 'Form code from Office Autopilot or other',
        'id'   => $prefix . 'ag_code',
        'type' => 'textarea_code'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'optin',
    'title'      => 'Opt-in Code',
    'pages'      => array( 'component', ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_on' => array( 
      'key' => 'taxonomy', 
      'value' => array( 
        'component-type' => array('get-case-study', 'get-case-study-video', 'get-case-study-sidebar', 'get-action-plan')
      ) 
    ),
    'show_names' => true, // Show field names on the left
    'fields'     => array(  
      array(
        'name' => 'Opt-in Embed Code',
        'desc' => 'Form code from Office Autopilot or other',
        'id'   => $prefix . 'optin_embed',
        'type' => 'textarea_code'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'testimonial Fields',
    'title'      => 'Testimonial',
    'pages'      => array( 'testimonial', ), // Post type
    'context'    => 'normal',
    'priority'   => 'low',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      array(
        'name' => 'Quotation',
        'id'   => $prefix . 'testimonial_quote',
        'type' => 'textarea'
      ),   
      array(
        'name' => 'Source Name',
        'id'   => $prefix . 'testimonial_source_name',
        'type' => 'text'
      ),    
      array(
        'name' => 'Source Title',
        'id'   => $prefix . 'testimonial_source_title',
        'type' => 'text'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'timeline',
    'title'      => 'Timeline Event Info',
    'pages'      => array( 'timeline-event', ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      array(
        'name' => 'Event Year',
        'id'   => $prefix . 'event_year',
        'type' => 'text'
      ),    
      array(
        'name' => 'Event Description',
        'id'   => $prefix . 'event_description',
        'type' => 'textarea'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'team-member',
    'title'      => 'Team Member Info',
    'pages'      => array( 'team-member', 'mentor', 'investor'), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      array(
        'name' => 'Team Member Title',
        'id'   => $prefix . 'team_title',
        'type' => 'text'
      ),  
      array(
        'name' => 'Team Member Website',
        'id'   => $prefix . 'team_link',
        'type' => 'text'
      )  
    )
  );

  $meta_boxes[] = array(
    'id'         => 'action-guide-info',
    'title'      => 'Action Guide Download Info',
    'pages'      => array( 'action-guide'), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      array(
        'name' => 'Cover Image',
        'id'   => $prefix . 'cover_image',
        'type' => 'file'
      ),  
      array(
        'name' => 'PDF Download Link',
        'id'   => $prefix . 'pdf_download',
        'type' => 'file'
      )  
    )
  );

   $meta_boxes[] = array(
    'id'         => 'Partner page Fields',
    'title'      => 'Partner',
    'pages'      => array( 'page', ), // Post type
    'show_on'    => array( 'key' => 'page-template', 'value' => array('partner-page.php' )),
    'context'    => 'normal',
    'priority'   => 'low',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      array(
        'name' => 'Video Embed Code',
        'desc' => 'Embed link copied from Wistia or other host. Should start with &lt;iframe&gt;',
        'id'   => $prefix . 'partner_video_embed',
        'type' => 'textarea_code'
        ),
      array(
        'name' => 'Partner Logos',
        'id'   => $prefix . 'partner_logos',
        'type' => 'file'
        )
      )
    );

  $meta_boxes[] = array(
    'id'         => 'Podcast Fields',
    'title'      => 'Podcast',
    'pages'      => array( 'podcast', ), // Post type
    'context'    => 'normal',
    'priority'   => 'low',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      array(
        'name' => 'Introduction Paragraph',
        'desc' => 'Text displayed beneath play options and above Action Guide CTA',
        'id'   => $prefix . 'podcast_video_intro',
        'type' => 'textarea'
      ),   
      array(
        'name' => 'Video Embed Code',
        'desc' => 'Embed link copied from Wistia or other host. Should start with &lt;iframe&gt;',
        'id'   => $prefix . 'podcast_video_embed',
        'type' => 'textarea_code'
      ),   
      // array(
      //   'name' => 'Audio Embed Link',
      //   'desc' => 'Direct link to mp3 File (ends with .mp3)',
      //   'id'   => $prefix . 'podcast_audio_embed',
      //   'type' => 'text'
      // ),   
      array(
        'name' => 'Audio Download Link',
        'desc' => 'Link to downloadable file on libsyn',
        'id'   => $prefix . 'podcast_audio_dl',
        'type' => 'text'
      ),
      array(
        'name' => 'iTunes Link',
        'id'   => $prefix . 'podcast_itunes_link',
        'type' => 'text'
      ),    
      array(
        'name' => 'Downloadable Transcript (PDF)',
        'id'   => $prefix . 'podcast_download_link',
        'type' => 'file'
      ),     
      array(
        'name' => 'Hide action guide opt-in?',
        'id'   => $prefix . 'hide_action_guide',
        'type' => 'checkbox',
        'default' => 'true'

      ),
      array(
        'name' => 'Cast Study Image',
        'desc' => 'Custom book cover image',
        'id'   => $prefix . 'podcast_book_cover',
        'type' => 'file'
      )
    )
  );

  $meta_boxes[] = array(
    'id'         => 'home_fields',
    'title'      => 'Home Page Custom Content',
    'pages'      => array( 'page', ), // Post type
    'show_on'    => array( 'key' => 'page-template', 'value' => array('home-page.php', 'home-page-alt1.php', 'home-page-alt2.php' )),
    'context'    => 'normal',
    'priority'   => 'low',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      array(
        'name' => 'Hero Section',
        'desc' => 'Topmost section on home page with video link',
        'type' => 'title',
        'id' => $prefix . 'home_hero_title'
      ),
       array(
        'name' => 'Hero Section Text',
        'id'   => $prefix . 'home_hero_text',
        'type' => 'text'
      ),
      array(
        'name' => 'Hero Section Video Embed Code',
        'id'   => $prefix . 'home_hero_video',
        'type' => 'textarea_code'
      ),
      array(
        'name' => 'Column 1',
        'desc' => 'Leftmost column on home page What is the Foundation Section',
        'type' => 'title',
        'id' => $prefix . 'column1_title'
      ),
      array(
        'name' => 'Column 1 Header',
        'id'   => $prefix . 'home_column1_header',
        'type' => 'text'
      ),
       array(
        'name' => 'Column 1 Content',
        'id'   => $prefix . 'home_column1_content',
        'type' => 'textarea'
      ),
      array(
        'name' => 'Column 2',
        'desc' => 'Center column on home page What is the Foundation Section',
        'type' => 'title',
        'id' => $prefix . 'column2_title'
      ),
      array(
        'name' => 'Column 2 Header',
        'id'   => $prefix . 'home_column2_header',
        'type' => 'text'
      ),
       array(
        'name' => 'Column 2 Content',
        'id'   => $prefix . 'home_column2_content',
        'type' => 'textarea'
      ),
      array(
        'name' => 'Column 3',
        'desc' => 'Rightmost column on home page What is the Foundation Section',
        'type' => 'title',
        'id' => $prefix . 'column3_title'
      ),
      array(
        'name' => 'Column 3 Header',
        'id'   => $prefix . 'home_column3_header',
        'type' => 'text'
      ),
       array(
        'name' => 'Column 3 Content',
        'id'   => $prefix . 'home_column3_content',
        'type' => 'textarea'
      ),
      array(
        'name' => 'Home Page Headlines',
        'desc' => 'Headlines for various sections of home page',
        'type' => 'title',
        'id' => $prefix . 'home_headlines_title'
      ),  
      array(
        'name' => 'Press Features Headline',
        'id'   => $prefix . 'home_headline_press',
        'type' => 'text'
      ),    
      array(
        'name' => 'Case Studies Headline',
        'id'   => $prefix . 'home_headline_case_studies',
        'type' => 'text'
      ),     
      array(
        'name' => 'Testimonials Headline',
        'id'   => $prefix . 'home_headline_testimonials',
        'type' => 'text'
      ),   
      array(
        'name' => 'Blog/Podcasts Headline',
        'id'   => $prefix . 'home_headline_recent',
        'type' => 'text'
      ),       
       array(
        'name' => 'Final CTA Headline',
        'id'   => $prefix . 'home_headline_cta',
        'type' => 'text'
      )   
    )
  );

  $meta_boxes[] = array(
    'id'         => 'podcast_archive_fields',
    'title'      => 'Podcast Archive',
    'pages'      => array( 'page', ), // Post type
    'show_on'    => array( 'key' => 'page-template', 'value' => 'archive-podcast-page.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      
      array(
        'name' => 'Subscribe on iTunes Link',
        'id'   => $prefix . 'subscribe_itunes_link',
        'type' => 'text'
      ),    
      array(
        'name' => 'Subscribe via RSS Link',
        'id'   => $prefix . 'subscribe_rss_link',
        'type' => 'text'
      )     
    )
  );

  $meta_boxes[] = array(
    'id'         => 'about_fields',
    'title'      => 'About Page',
    'pages'      => array( 'page', ), // Post type
    'show_on'    => array( 'key' => 'page-template', 'value' => 'about-page.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      
      array(
        'name' => 'Timeline Header',
        'id'   => $prefix . 'timeline_header',
        'type' => 'text'
      ),
       array(
        'name' => 'Team Header',
        'id'   => $prefix . 'team_header',
        'type' => 'text'
      ), 
      array(
        'name' => 'Mentors Header',
        'id'   => $prefix . 'mentors_header',
        'type' => 'text'
      ),
      array(
        'name' => 'Investors Header',
        'id'   => $prefix . 'investors_header',
        'type' => 'text'
      )
    )
  );

  // Add other metaboxes as needed

  return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

  if ( ! class_exists( 'cmb_Meta_Box' ) )
    require_once 'metaboxes/init.php';

}