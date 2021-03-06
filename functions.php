<?php

//setup


// includes
include(get_template_directory().'/inc/front/enqueue.php');
include(get_template_directory().'/inc/setup.php');
include(get_template_directory().'/inc/widgets.php');
include(get_theme_file_path('/inc/front/comment-field.php'));
include(get_theme_file_path('/inc/customizer/social.php'));
include(get_theme_file_path('/inc/theme-customizer.php'));



// Hooks
add_action( 'wp_enqueue_scripts', 'ju_enqeueu');
add_action('after_setup_theme', 'ju_setup_theme');
add_action('widgets_init', 'ju_widgets');
add_action('customize_register', 'ju_customize_register');

// Shortcodes
