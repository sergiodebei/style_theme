<?php

/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Add post image support */
add_theme_support( 'post-thumbnails' );

/* Add svg image support */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Extend WordPress search to include custom fields
 
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

// Modify the search query with posts_where

function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

// Prevent duplicates

function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/**
 * Get first paragraph from a WordPress post. Use inside the Loop.
 *
 * @return string
 */
function get_first_paragraph(){
    global $post;
    
    $str = wpautop( get_the_content() );
    $str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
    $str = strip_tags($str, '<a><strong><em>');
    return '<p>' . $str . '</p>';
}

/**
 * Enqueue scripts and styles.
 */
function malutheme_scripts() {

	// wp_enqueue_style( 'freshtheme-custom-style', get_template_directory_uri(). '/css/css_vendor/custom.css');
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
    wp_enqueue_style( 'slick-theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css' );
	wp_enqueue_style( 'malutheme-style', get_stylesheet_uri() );

	// name-of-the-script, url-of-the-script, array-of-script-the-script-depends-on, script-version-number, if-the-script-needs-to-be-placed-before-the-end-of-the-body
    // wp_enqueue_script( 'malutheme-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '', '' );
	wp_enqueue_script( 'malutheme-jquery', get_template_directory_uri() . '/js/js_vendor/jquery-1.11.2.min.js', array(), '', '' );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array(), '', true );
    wp_enqueue_script( 'malutheme-slider', get_template_directory_uri() . '/js/js_resources/bp_slider.js', array(), '', true );
    wp_enqueue_script( 'malutheme-accordion', get_template_directory_uri() . '/js/js_resources/bp_accordion.js', array(), '', true );
	wp_enqueue_script( 'malutheme-main', get_template_directory_uri() . '/js/main.js', array(), '', true);

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'malutheme_scripts' );

// Add a Custom Dashboard Logo
// function wpb_custom_logo() {
// echo '
//     <style type="text/css">
//     #wpadminbar #wp-admin-bar-wp-logo > .ab-item{
//         background-color: #f0f0f0;
//     }
//     #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
//         background-image: url(' . get_bloginfo('stylesheet_directory') . '/favicon.ico) !important;
//         background-position: center;
//         background-repeat: no-repeat;
//         color:rgba(0, 0, 0, 0);
//         background-size: cover;
//     }
//     #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
//         background-position: 0 0;
//     }
//     </style>
// ';
// }
//hook into the administrative header output
// add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

//to add extra menus
function register_my_menus() {
    register_nav_menus(
        array(
          'malu-menu' => __( 'Malu menu' ),
          'malu-footer-menu' => __( 'Malu footer menu' ),
          'cerruti-menu' => __( 'Cerruti menu' ),
          'cerruti-footer-menu' => __( 'Cerruti footer menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

// function create_post_type() {
//   register_post_type( 'pr_slider',
//     array(
//       'labels' => array(
//         'name' => __( 'Slides' ),
//         'singular_name' => __( 'slide' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'menu_position' => 4,
//       'menu_icon' => 'dashicons-image-flip-horizontal',
//       'can_export' => true,
//     )
//   );
// }
// add_action( 'init', 'create_post_type' );
