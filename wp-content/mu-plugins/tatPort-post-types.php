<?php
function tatPort_post_types() {
    register_post_type('sketches', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'sketches'),
        'public' => true,
        'labels' => array(
          'name' => 'Sketches',
          'add_new_item' => 'Add New Sketch',
          'edit_item' => 'Edit Sketch',
          'all_items' => 'All Sketches',
          'singular_name' => 'sketch'
        ),
        'menu_icon' => 'dashicons-edit-large'
    ));

    register_post_type('ink', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite' => array('slug' => 'ink'),
      'public' => true,
      'labels' => array(
        'name' => 'Ink',
        'add_new_item' => 'Add New Ink',
        'edit_item' => 'Edit Ink',
        'all_items' => 'All Ink',
        'singular_name' => 'Ink'
      ),
      'menu_icon' => 'dashicons-admin-customizer'
  ));

}





add_action('init', 'tatPort_post_types');


?>
