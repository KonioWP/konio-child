<?php
/**
 * Konio child theme functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Konio Child
 * @since 1.0.0
 */

function child_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [] );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles', 25 );

function konio_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'konio', $lang );
}
add_action( 'after_setup_theme', 'konio_lang_setup' );