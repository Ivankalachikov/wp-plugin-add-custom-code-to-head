<?php

/**
 * Plugin Name: Add Custom Code to Head
 * Description: Add custom code into head tag on your site
 * Plugin URI: https://github.com/Ivankalachikov/wp-plugin-add-custom-code-to-head
 * Author URI: https://t.me/ivankalachikov
 * Author: Ivan Kalachikov
 * Version: 1.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

require_once plugin_dir_path( __FILE__ ) . 'includes/accth-functions.php';

add_action( 'admin_init', 'accth_register_settings' );
add_action( 'wp_head', 'accth_insert_codes' );
