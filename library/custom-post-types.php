<?php
// Custom Post Types
add_action( 'init', 'create_new_student_types' );
function create_new_student_types() {
  // Add Student Types
  $labels = array(
    'name' => 'Student Types',
     'singular_name' => 'Student Type',
     'menu_name' => 'Student Types',
     'add_new' => 'Add Student Type',
     'add_new_item' => 'Add New Student Type',
     'edit' => 'Edit',
     'edit_item' => 'Edit Student Type',
     'new_item' => 'New Student Type',
     'view' => 'View Student Type',
     'view_item' => 'View Student Type',
     'search_items' => 'Search Student Types',
     'not_found' => 'No Student Types Found',
     'not_found_in_trash' => 'No Student Types Found in Trash',
     'parent' => 'Parent Student Type'
  );
  $args = array(
    'labels' => $labels,
    'description' => 'Create new student type menu item for Summer @ SU',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'page',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'student-type'),
    'query_var' => true,
    'exclude_from_search' => true,
    'menu_position' => 31,
    'supports' => array('title', 'page-attributes'),
  );
  register_post_type('student-type', $args);
};
add_action( 'init', 'create_new_slides' );
function create_new_slides() {
  // Add Student Types
  $labels = array(
    'name' => 'Slides',
     'singular_name' => 'Slide',
     'menu_name' => 'Slides',
     'add_new' => 'Add Slide',
     'add_new_item' => 'Add New Slide',
     'edit' => 'Edit',
     'edit_item' => 'Edit Slide',
     'new_item' => 'New Slide',
     'view' => 'View Slide',
     'view_item' => 'View Slide',
     'search_items' => 'Search Slides',
     'not_found' => 'No Slides Found',
     'not_found_in_trash' => 'No Slides Found in Trash',
     'parent' => 'Parent Slide'
  );
  $args = array(
    'labels' => $labels,
    'description' => 'Create new slides for Summer @ SU. These are displayed on the homepage',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'page',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'slide'),
    'query_var' => true,
    'exclude_from_search' => true,
    'menu_position' => 33,
    //'show_in_menu' => 'home-menu',
    'supports' => array('title'),
  );
  register_post_type('slide', $args);
};
// New Modules For Homepage
add_action( 'init', 'create_new_modules' );
function create_new_modules() {
  // Add Modules
  $labels = array(
    'name' => 'Modules',
     'singular_name' => 'Module',
     'menu_name' => 'Modules',
     'add_new' => 'Add Module',
     'add_new_item' => 'Add New Module',
     'edit' => 'Edit',
     'edit_item' => 'Edit Module',
     'new_item' => 'New Module',
     'view' => 'View Module',
     'view_item' => 'View Module',
     'search_items' => 'Search Modules',
     'not_found' => 'No Modules Found',
     'not_found_in_trash' => 'No Modules Found in Trash',
     'parent' => 'Parent Module'
  );
  $args = array(
    'labels' => $labels,
    'description' => 'Create new modules for Summer @ SU. These are displayed on the homepage',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'page',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'module'),
    'query_var' => true,
    'exclude_from_search' => true,
    'menu_position' => 34,
    //'show_in_menu' => 'home-menu',
    'supports' => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('module', $args);
};
// Register Custom Post Type
function class_listing() {

	$labels = array(
		'name'                => _x( 'Course Lists', 'Post Type General Name', 'summertheme' ),
		'singular_name'       => _x( 'Course List', 'Post Type Singular Name', 'summertheme' ),
		'menu_name'           => __( 'Course List', 'summertheme' ),
		'parent_item_colon'   => __( 'Parent Course List:', 'summertheme' ),
		'all_items'           => __( 'Course Lists', 'summertheme' ),
		'view_item'           => __( 'View Course List', 'summertheme' ),
		'add_new_item'        => __( 'Add New Course List', 'summertheme' ),
		'add_new'             => __( 'New Course List', 'summertheme' ),
		'edit_item'           => __( 'Edit Course List', 'summertheme' ),
		'update_item'         => __( 'Update Course Lists', 'summertheme' ),
		'search_items'        => __( 'Search Course Lists', 'summertheme' ),
		'not_found'           => __( 'No Course Lists Found', 'summertheme' ),
		'not_found_in_trash'  => __( 'No Course Lists Found in Trash', 'summertheme' ),
	);
	$args = array(
		'label'               => __( 'class-list', 'summertheme' ),
		'description'         => __( 'Course Information pages', 'summertheme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'page-attributes', ),
		'taxonomies'          => array( 'schools', ' department' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 32,
		//'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		//'rewrite' => array('slug' => 'programs-courses'),
		'capability_type'     => 'class-list',
	);
	register_post_type( 'class-list', $args );
}
// Hook into the 'init' action
add_action( 'init', 'class_listing', 0 );
// Register Custom Taxonomy
function school_tax()  {
	$labels = array(
		'name'                       => _x( 'Schools', 'Taxonomy General Name', 'summertheme' ),
		'singular_name'              => _x( 'School', 'Taxonomy Singular Name', 'summertheme' ),
		'menu_name'                  => __( 'Schools', 'summertheme' ),
		'all_items'                  => __( 'All Schools', 'summertheme' ),
		'parent_item'                => __( 'Parent School', 'summertheme' ),
		'parent_item_colon'          => __( 'Parent School:', 'summertheme' ),
		'new_item_name'              => __( 'New School Name', 'summertheme' ),
		'add_new_item'               => __( 'Add New School', 'summertheme' ),
		'edit_item'                  => __( 'Edit School', 'summertheme' ),
		'update_item'                => __( 'Update School', 'summertheme' ),
		'separate_items_with_commas' => __( 'Separate Schools with commas', 'summertheme' ),
		'search_items'               => __( 'Search Schools', 'summertheme' ),
		'add_or_remove_items'        => __( 'Add or Remove Schools', 'summertheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used Schools', 'summertheme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'schools', 'class-list', $args );
}
// Hook into the 'init' action
add_action( 'init', 'school_tax', 0 );
// Register Custom Taxonomy
function dept_tax()  {
	$labels = array(
		'name'                       => _x( 'Departments', 'Taxonomy General Name', 'summertheme' ),
		'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'summertheme' ),
		'menu_name'                  => __( 'Departments', 'summertheme' ),
		'all_items'                  => __( 'All Departments', 'summertheme' ),
		'parent_item'                => __( 'Parent Department', 'summertheme' ),
		'parent_item_colon'          => __( 'Parent Department:', 'summertheme' ),
		'new_item_name'              => __( 'New Department Name', 'summertheme' ),
		'add_new_item'               => __( 'Add New Department', 'summertheme' ),
		'edit_item'                  => __( 'Edit Department', 'summertheme' ),
		'update_item'                => __( 'Update Department', 'summertheme' ),
		'separate_items_with_commas' => __( 'Separate Department with commas', 'summertheme' ),
		'search_items'               => __( 'Search Department', 'summertheme' ),
		'add_or_remove_items'        => __( 'Add or Remove Department', 'summertheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used Department', 'summertheme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'capabilities' => array (
            'manage_terms' => 'edit_class-list',
            'edit_terms' => 'edit_class-list',
            'delete_terms' => 'edit_class-list',
            'assign_terms' => 'edit_class-list'
        ),
	);
	register_taxonomy( 'department', 'class-list', $args );
}
// Hook into the 'init' action
add_action( 'init', 'dept_tax', 0 );
?>​