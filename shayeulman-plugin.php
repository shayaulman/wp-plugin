<?php 

/**
 * @package   shayeulman@gmail.com
 */

/*
Plugin Name: ShayeUlman Plugin
Plugin URI: shayeulman@gmail.com
Description: My first plugin
Version: 1.0.0
Author: Shaye
URI: shayeulman@gmail.com
License: GPLv2 or later 
*/


defined( 'ABSPATH' ) or die( 'Access denied' );

class ShayeUlman
{
    function __construct() {
        add_action( 'init', array( $this, 'custom_post_type') );
    }

    function activate() {
        $this->custom_post_type;
        flush_rewrite_rules();
    }

    function deactivate() {
        flush_rewrite_rules();


    }

    function uninstall() {

    }

    function custom_post_type() {
        register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
    }

    
}

if ( class_exists( 'ShayeUlman' ) ) {
    $shayeUlmanPlugin = new ShayeUlman( 'Plugin initialized!' );
    // or just:
    // new ShayeUlman();
}


// activation  
register_activation_hook( __FILE__, array( $shayeUlmanPlugin, 'activate' ) );

// deactiavtion
register_deactivation_hook( __FILE__, array( $shayeUlmanPlugin, 'deactivate' ) );

// uninstall






