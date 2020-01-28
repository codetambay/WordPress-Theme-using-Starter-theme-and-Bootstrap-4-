<?php
/**
 * CodeTambay wp_enqueue_style and wp_enqueue_script 
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 *
 * @package codetambayb4
 */

function codetambay_b4_scripts_custom() {


    // google fonts, website logo font, H1 
    wp_enqueue_style( 'codetambay_b4-google-fonts', 'https://fonts.googleapis.com/css?family=Hammersmith+One&display=swap', false ); 
    /* 
     * to use in CSS
     * font-family: 'Hammersmith One', sans-serif;
     *  
     */

    // bootstrap js
    wp_enqueue_script( 'codetambay_b4-bootstrap', get_template_directory_uri() . '/js/bootstrapv4/bootstrap.min.js', array('jquery'), '20151215', true );
    // Custom js
    wp_enqueue_script( 'codetambay_b4-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '20151215', true );

    // Genericons - http://genericons.com/	
    wp_enqueue_style( 'codetambay_b4-genericons', get_template_directory_uri() . '/css/genericons/genericons.css' );

    // bootstrap styles
    wp_enqueue_style( 'codetambay_b4-bootstrapv4', get_template_directory_uri() . '/css/bootstrapv4/bootstrap.css' );

    // Custom styles
    wp_enqueue_style( 'codetambay_b4-custom', get_template_directory_uri() . '/css/custom.css' );	

}
add_action( 'wp_enqueue_scripts', 'codetambay_b4_scripts_custom' );
