<?php
/**
 * InfoCamp2016 Theme Customizer.
 *
 * @package InfoCamp2016
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function infocamp_2016_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	// Event info section
    $wp_customize->add_section( 'event_info' , array(
        'title'      => __( 'Event Info', 'infocamp-2016' ),
        'priority'   => 2,
    ) );

    $wp_customize->add_setting( 'event_date', array('default' => '') );
    $wp_customize->add_control( 'event_date', array(
        'label'     => __( 'Event Date', 'infocamp-2016' ),
        'section'   => 'event_info',
        'type'      => 'date',
        'priority'  => 10
    ) );

    $wp_customize->add_setting( 'event_location', array('default' => '') );
    $wp_customize->add_control( 'event_location', array(
        'label'     => __( 'Event Location', 'infocamp-2016' ),
        'section'   => 'event_info',
        'type'      => 'text',
        'priority'  => 11
    ) );
}
add_action( 'customize_register', 'infocamp_2016_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function infocamp_2016_customize_preview_js() {
	wp_enqueue_script( 'infocamp_2016_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'infocamp_2016_customize_preview_js' );
