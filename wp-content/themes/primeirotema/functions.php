<?php
// Include
require get_template_directory().'/include/setup.php';

// Hooks
add_action('wp_enqueue_scripts', 'mg_theme_styles');
add_action('after_setup_theme', 'mg_after_setup');