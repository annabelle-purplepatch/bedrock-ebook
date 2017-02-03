<?php
/*
Theme Name: Bedrock Analytics
Description: A theme made for Bedrock Site
Author: Purplepatch Services (ABC)
*/

// Unload admin bar
show_admin_bar( false );

// Load scripts
function js_scripts() { 
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'js_scripts');

// Support Thumbnails
add_theme_support( 'post-thumbnails' );

// Support Menu
add_theme_support('menus');
function register_menu() {
  register_nav_menus(
    array(
    'primary' => __( 'Primary Menu', 'entercoms')
    )
  );
}
add_action( 'init', 'register_menu' );

function default_nav() {        

  wp_list_pages('sort_column=menu_order&title_li='); 

}


// function add_login_logout_link($items, $args) {         
//   ob_start();         
//   wp_loginout('/');         
//   $loginoutlink = ob_get_contents();         
//   ob_end_clean();         
//   $items .= '<li>'. $loginoutlink .'</li>';     
//   return $items; 
// }
// add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2); 

function create_team_post_type() {
  // TEAM 
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Team' ),
        'singular_name' => __( 'Team' ),
        'menu_name'          => __( 'Team' ),
        'name_admin_bar'     => __( 'Team' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Team' ),
        'new_item'           => __( 'New Team' ),
        'edit_item'          => __( 'Edit Team' ),
        'view_item'          => __( 'View Team' ),
        'all_items'          => __( 'All Team' ),
        'search_items'       => __( 'Search Team' ),
        'not_found'          => __( 'None found.' ),
        'not_found_in_trash' => __( 'None found in Trash.' )
      ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
      'rewrite'             => array('slug' => 'team')
    )
  );

  // CAREERS 
  register_post_type( 'career',
    array(
      'labels' => array(
        'name' => __( 'Career' ),
        'singular_name' => __( 'Career' ),
        'menu_name'          => __( 'Careers' ),
        'name_admin_bar'     => __( 'Careers' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Career' ),
        'new_item'           => __( 'New Career' ),
        'edit_item'          => __( 'Edit Career' ),
        'view_item'          => __( 'View Career' ),
        'all_items'          => __( 'All Career' ),
        'search_items'       => __( 'Search Career' ),
        'not_found'          => __( 'No career found.' ),
        'not_found_in_trash' => __( 'No career found in Trash.' )
      ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'supports'            => array( 'title', 'editor', 'author'),
      'rewrite'             => array('slug' => 'career')
    )
  );

  // INVESTORS 
  register_post_type( 'investor',
    array(
      'labels' => array(
        'name' => __( 'Investor' ),
        'singular_name' => __( 'Investor' ),
        'menu_name'          => __( 'Investors' ),
        'name_admin_bar'     => __( 'Investors' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Investor' ),
        'new_item'           => __( 'New Investor' ),
        'edit_item'          => __( 'Edit Investor' ),
        'view_item'          => __( 'View Investor' ),
        'all_items'          => __( 'All Investor' ),
        'search_items'       => __( 'Search Investor' ),
        'not_found'          => __( 'No investor found.' ),
        'not_found_in_trash' => __( 'No investor found in Trash.' )
      ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'supports'            => array( 'title', 'editor', 'thumbnail'),
      'rewrite'             => array('slug' => 'investor')
    )
  );

  // CUSTOMERS
  register_post_type( 'customer',
    array(
      'labels' => array(
        'name' => __( 'Customer' ),
        'singular_name' => __( 'Customer' ),
        'menu_name'          => __( 'Customers' ),
        'name_admin_bar'     => __( 'Customers' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Customer' ),
        'new_item'           => __( 'New Customer' ),
        'edit_item'          => __( 'Edit Customer' ),
        'view_item'          => __( 'View Customer' ),
        'all_items'          => __( 'All Customer' ),
        'search_items'       => __( 'Search Customer' ),
        'not_found'          => __( 'No customer found.' ),
        'not_found_in_trash' => __( 'No customer found in Trash.' )
      ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite'             => array('slug' => 'customer')
    )
  );

  // TESTIMONIALS
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonial' ),
        'singular_name' => __( 'Testimonial' ),
        'menu_name'          => __( 'Testimonials' ),
        'name_admin_bar'     => __( 'Testimonials' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Testimonial' ),
        'new_item'           => __( 'New Testimonial' ),
        'edit_item'          => __( 'Edit Testimonial' ),
        'view_item'          => __( 'View Testimonial' ),
        'all_items'          => __( 'All Testimonial' ),
        'search_items'       => __( 'Search Testimonial' ),
        'not_found'          => __( 'No testimonials found.' ),
        'not_found_in_trash' => __( 'No testimonials found in Trash.' )
      ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'supports'            => array( 'title', 'editor', 'thumbnail'),
      'rewrite'             => array('slug' => 'testimonials')
    )
  );

  // CPG INDUSTRY
  register_post_type( 'cpg-industry',
    array(
      'labels' => array(
        'name' => __( 'CPG Industry' ),
        'singular_name' => __( 'CPG Industry' ),
        'menu_name'          => __( 'CPG Industry' ),
        'name_admin_bar'     => __( 'CPG Industry' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New CPG Industry' ),
        'new_item'           => __( 'New CPG Industry' ),
        'edit_item'          => __( 'Edit CPG Industry' ),
        'view_item'          => __( 'View CPG Industry' ),
        'all_items'          => __( 'All CPG Industry' ),
        'search_items'       => __( 'Search CPG Industry' ),
        'not_found'          => __( 'No industry found.' ),
        'not_found_in_trash' => __( 'No industry found in Trash.' )
      ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite'             => array('slug' => 'cpg-industry')
    )
  );

}
add_action( 'init', 'create_team_post_type' );

function add_google_analytics() {

    wp_register_script(
    'google-analytics',
    get_stylesheet_directory_uri() . 'js/analyticstracking.js',
    false,
    '1.0',
    true
    );

    wp_enqueue_script('google-analytics');
}

add_action('wp_enqueue_scripts', 'add_google_analytics');
?>