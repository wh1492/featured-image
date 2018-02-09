<?php 
/*
Plugin Name: Featured Image Enforcer
Plugin URI: http://acaban.com.ve
Description: Forces a featured image to be set before publishing a post
Version: 1.0
Author: Leonelo Acaban
Autor URI: http://acaban.com.ve
License: GPLv2 or later
*/

define('FEATURED_ENFORCER_IMAGE', 1);

function featured_image_enforcer_enqueue_scripts ( $hook ){
  //  die($hook);
   // if('post-new.php' != $hook)
    if( $hook !== 'post.php' && $hook !== 'post-new.php')
        return;

    wp_enqueue_script(
        'featured-image-enforcer',
        plugins_url('js/featured-image-enforcer.js', __FILE__),
        array('jquery'),
        FEATURED_ENFORCER_IMAGE,
        true
    );
    wp_localize_script(
        'featured-image-enforcer',
        'featured_image_data',
        array(
            'message' => __('Please select a featured image first', 'featured-image-enforcer')
        )
    );
}



add_action('admin_enqueue_scripts', 'featured_image_enforcer_enqueue_scripts');