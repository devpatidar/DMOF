<?php
/**
 * Plugin Name: Meta Box
 * Plugin URI: https://devpatidar.com
 * Description: Create meta boxes in WordPress.
 * Version: 1.0.0
 * Author: Dev Patidar
 * Author URI: http://www.devpatidar.com
 * License: GPL2+
 * Text Domain: dmb
 */

if (!defined( 'ABSPATH' )) return false;

define( 'DMOF_METABOX_DIR' , dirname( __FILE__ ));

// Included metabox config
require_once DMOF_METABOX_DIR . '/config.php';
require_once DMOF_METABOX_DIR . '/includes/core_functions.php';
require_once DMOF_METABOX_DIR . '/includes/dmb_functions.php';

/**
 * Add Style and script for admin
 */

// function dmb_load_custom_wp_admin_style() {

// 	wp_enqueue_style( 'dmb_custom_style', get_template_directory_uri() . '/admin/DMOF/meta_box/css/style.css', array(), '1.0.0', 'all');
// 	wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');

// 	/* Load Theme Script */
// 	wp_enqueue_script( 'jquery' );
// 	wp_enqueue_media();
// 	wp_enqueue_style( 'wp-color-picker');
//     wp_enqueue_script( 'wp-color-picker');
	
// 	wp_enqueue_script('jquery-ui-datepicker');
	
// 	wp_register_script( 'dmb_custom_script', get_template_directory_uri() . '/admin/DMOF/meta_box/js/metabox.js' );
// 	wp_enqueue_script( 'dmb_custom_script' );

// }
// add_action( 'admin_enqueue_scripts', 'dmb_load_custom_wp_admin_style' );