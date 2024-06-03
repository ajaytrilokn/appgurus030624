<?php
/*
 * Plugin Name: Read Me Later
 * Plugin URI: 
 * Description: This plugin allow you to add blog posts in read me later lists using Ajax
 * Version: 1.0.0
 * Author: Wordpress Team
 * Author URI: 
 * License: GPL3
 */


 class ReadMeLater {

    public function run() {     
 // Enqueue plugin styles and scripts
 add_action( 'plugins_loaded', array( $this, 'enqueue_rml_scripts' ) );
 add_action( 'plugins_loaded', array( $this, 'enqueue_rml_styles' ) ); 
 // Setup Ajax action hook
add_action( 'wp_ajax_read_me_later', array( $this, 'read_me_later' ) );   
 // Setup filter hook to show Read Me Later link
add_filter( 'the_excerpt', array( $this, 'rml_button' ) );
add_filter( 'the_content', array( $this, 'rml_button' ) );  

    }   
    /**
     * Register plugin styles and scripts
     */
    public function register_rml_scripts() {
        wp_register_script( 'rml-script', plugins_url( 'js/read-me-later.js', __FILE__ ), array('jquery'), null, true );
        wp_register_style( 'rml-style', plugins_url( 'css/read-me-later.css' ) );
    }   
    /**
     * Enqueues plugin-specific scripts.
     */
    public function enqueue_rml_scripts() {        
        wp_enqueue_script( 'rml-script' );
    }   
    /**
     * Enqueues plugin-specific styles.
     */
    public function enqueue_rml_styles() {         
        wp_enqueue_style( 'rml-style' ); 
    }

    public function rml_button( $content ) {   
        // Show read me later link only when the user is logged in
        if( is_user_logged_in() && get_post_type() == post ) {
            $html .= '<a href="#" class="rml_bttn" data-id="' . get_the_id() . '">Read Me Later</a>';
            $content .= $html;
        }
        return $content;       
    }
    
 }

//  Widget
class RML_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
           'rml_widget', // Base ID
            __( 'Read Me Later', 'text_domain' ), // Name
            array( 'classname' => 'rml_widgt', 'description' => __( 'Read Me Later widget for displaying saved posts', 'text_domain' ), ) // Args
        );
    }
}

?>