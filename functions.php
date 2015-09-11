<?php

add_action( 'wp_enqueue_scripts', 'campaign_enqueue_scripts', 11 );
/**
 * Enqueue scripts used by the campaign theme.
 */
function campaign_enqueue_scripts() {
	wp_enqueue_script( 'wsu-campaign-js', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), spine_get_script_version(), true );
}