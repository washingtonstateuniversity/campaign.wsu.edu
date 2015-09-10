<?php

add_action( 'wp_enqueue_scripts', 'campaign_enqueue_scripts', 11 );
/**
 * Enqueue scripts used by the campaign theme.
 */
function campaign_enqueue_scripts() {
	wp_enqueue_script( 'wsu-campaign-fullpage-js', get_stylesheet_directory_uri() . '/js/jquery.fullPage.min.js', array( 'jquery' ), spine_get_script_version(), true );
}

add_action( 'spine_enqueue_styles', 'campaign_enqueue_styles', 11 );
/**
 * Enqueue styles other than the default style.css used by the campaign theme.
 */
function campaign_enqueue_styles() {
	wp_enqueue_style( 'wsu-campaign-fullpage', get_stylesheet_directory() . '/css/jquery.fullPage.css', array(), spine_get_script_version() );
}