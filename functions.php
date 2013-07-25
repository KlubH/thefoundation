<?php

  require('functions/meta_box.php');

  /** Admin Slug Function */
  function the_slug() {
      $post_data = get_post($post->ID, ARRAY_A);
      $slug = $post_data['post_name'];
      return $slug; 
  }

  add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
  function be_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
      require_once( 'functions/metaboxes/init.php' );
    }
  }

  function register_my_menus() {
    register_nav_menus(
      array( 
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' , array('post', 'page', 'press-feature', 'case-study', 'testimonial', 'podcast', 'team-member', 'mentor', 'investor'));
    set_post_thumbnail_size( 340, 340, true );
    add_image_size('case-study', 290, 170, true);
    add_image_size('testimonial', 70, 70, true);
  }

  register_sidebar(array(
    'name' => __( 'Main Sidebar' ),
    'id' => 'main-sidebar',
    'description' => __( 'Widgets in this area will be shown in the sidebar on the right side of the blog and podcast pages' )
  ));

  // function my_scripts_method() {
  //   wp_enqueue_script( 'jquery' );
  //   wp_enqueue_script(
  //     'custom-script',
  //     get_template_directory_uri() . '/scripts/main.js',
  //     array( 'jquery' )
  //   );
  // }

  // add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

  function create_post_type() {
    register_post_type( 'component',
      array(
        'labels' => array(
          'name' => __( 'Components' ),
          'singular_name' => __( 'Component' ),
          'add_new_item' => "Add New Component",
          'edit_item' => "Edit Component"
        ),
      'public' => false,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title', 'editor', 'thumbnail'),
      'query_var' => false
      )
    );
    register_post_type( 'press-feature',
      array(
        'labels' => array(
          'name' => __( 'Press Features' ),
          'singular_name' => __( 'Press Feature' ),
          'add_new_item' => "Add New Press Feature",
          'edit_item' => "Edit Press Feature"
        ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title'),
      'query_var' => false
      )
    );
    register_post_type( 'team-member',
      array(
        'labels' => array(
          'name' => __( 'Team Members' ),
          'singular_name' => __( 'Team Member' ),
          'add_new_item' => "Add New Team Member",
          'edit_item' => "Edit Team Member"
        ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title', 'thumbnail'),
      'query_var' => false
      )
    );
    register_post_type( 'action-guide',
      array(
        'labels' => array(
          'name' => __( 'Action Guides' ),
          'singular_name' => __( 'Action Guide' ),
          'add_new_item' => "Add New Action Guide",
          'edit_item' => "Edit Action Guide"
        ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title', 'thumbnail', 'editor'),
      'query_var' => false
      )
    );
    register_post_type( 'mentor',
      array(
        'labels' => array(
          'name' => __( 'Mentors' ),
          'singular_name' => __( 'Mentor' ),
          'add_new_item' => "Add New Mentor",
          'edit_item' => "Edit Mentor"
        ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title', 'thumbnail'),
      'query_var' => false
      )
    );

    register_post_type( 'investor',
      array(
        'labels' => array(
          'name' => __( 'Investors' ),
          'singular_name' => __( 'Investor' ),
          'add_new_item' => "Add New Investor",
          'edit_item' => "Edit Investor"
        ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title', 'thumbnail'),
      'query_var' => false
      )
    );

    register_post_type( 'case-study',
      array(
        'labels' => array(
          'name' => __( 'Case Studies' ),
          'singular_name' => __( 'Case Study' ),
          'add_new_item' => "Add New Case Study",
          'edit_item' => "Edit Case Study"
        ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => false
      )
    );
    register_post_type( 'timeline-event', 
      array(
        'labels' => array(
            'name' => __('Timeline Events'),
            'singular_name' => __('Timeline Event'),
            'add_new_item' => "Add New Timeline Event",
            'edit_item' => "Edit Timeline Event"
          ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => false,
        'supports' => array('title'),
        'query_var' => false
      )
    );
    register_post_type( 'testimonial',
      array(
        'labels' => array(
          'name' => __( 'Testimonials' ),
          'singular_name' => __( 'Testimonial' ),
          'add_new_item' => "Add New Testimonial",
          'edit_item' => "Edit Testimonial"
        ),
      'public' => false,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => false,
      'supports' => array('title', 'thumbnail'),
      'query_var' => false
      )
    );
    register_post_type( 'podcast',
      array(
        'labels' => array(
          'name' => __( 'Podcasts' ),
          'singular_name' => __( 'Podcast' ),
          'add_new_item' => "Add New Podcast",
          'edit_item' => "Edit Podcast"
        ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'type' => 'post',
      'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','comments','revisions'),
      'hierarchical' => false,
      'query_var' => false
      )
    );
    flush_rewrite_rules();
  }

  add_action( 'init', 'create_post_type' );

  function add_custom_taxonomies() {
    register_taxonomy('component-type', 'component', array(
      'hierarchical' => true,
      'labels' => array(
        'name' => _x( 'Component Types', 'taxonomy general name' ),
        'singular_name'       => _x( 'Genre', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Component Types' ),
        'all_items'           => __( 'All Component Types' ),
        'parent_item'         => __( 'Parent Component Type' ),
        'parent_item_colon'   => __( 'Parent Component Type:' ),
        'edit_item'           => __( 'Edit Component Type' ), 
        'update_item'         => __( 'Update Component Type' ),
        'add_new_item'        => __( 'Add New Component Type' ),
        'new_item_name'       => __( 'New Component Type Name' ),
        'menu_name'           => __( 'Component Type' )
      ),
    ));
  }

  add_action( 'init', 'add_custom_taxonomies', 0 );

  /**
   * Taxonomy show_on filter 
   * @author Bill Erickson
   * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Adding-your-own-show_on-filters
   *
   * @param bool $display
   * @param array $metabox
   * @return bool display metabox
   */
  function be_taxonomy_show_on_filter( $display, $meta_box ) {

    if ( 'taxonomy' !== $meta_box['show_on']['key'] )
      return $display;

    if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
    elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
    if( !isset( $post_id ) )
      return $display;
    
    foreach( $meta_box['show_on']['value'] as $taxonomy => $slugs ) {
      if( !is_array( $slugs ) )
        $slugs = array( $slugs );
      
      $display = false;     
      $terms = wp_get_object_terms( $post_id, $taxonomy );
      foreach( $terms as $term )
        if( in_array( $term->slug, $slugs ) )
          $display = true;
    }
    
    return $display;
    
  }
  add_filter( 'cmb_show_on', 'be_taxonomy_show_on_filter', 10, 2 );

  /**
   * RESPONSIVE IMAGE FUNCTIONS
   */
   
  add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
  add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
   
  function remove_thumbnail_dimensions( $html ) {
          $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
          return $html;
  }

/* ends welcome gate */

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo.png);
            padding-bottom: 10px;
            -webkit-background-size: 236px 42px;
            background-size: 236px 42px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


?>