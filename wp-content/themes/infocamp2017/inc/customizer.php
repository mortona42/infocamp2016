<?php
/**
 * InfoCamp2017 Theme Customizer
 *
 * @package InfoCamp2017
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function infocamp2017_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


    // Event details section
    $wp_customize->add_section( 'event_details' , array(
        'title'      => __( 'Event Details', 'infocamp-2017' ),
        'priority'   => 1,
    ) );

    $wp_customize->add_setting( 'event_date', array('default' => '') );
    $wp_customize->add_control( 'event_date', array(
        'label'     => __( 'Event date', 'infocamp-2017' ),
        'section'   => 'event_details',
        'type'      => 'date',
        'priority'  => 1
    ) );

    $wp_customize->add_setting( 'event_location', array('default' => '') );
    $wp_customize->add_control( 'event_location', array(
        'label'     => __( 'Event location', 'infocamp-2017' ),
        'section'   => 'event_details',
        'type'      => 'text',
        'priority'  => 2
    ) );

    $wp_customize->add_setting( 'registration_url', array('default' => '') );
    $wp_customize->add_control( 'registration_url', array(
        'label'     => __( 'Registration URL', 'infocamp-2017' ),
        'section'   => 'event_details',
        'type'      => 'text',
        'priority'  => 3
    ) );

    $wp_customize->add_setting( 'registration_button', array('default' => '') );
    $wp_customize->add_control( 'registration_button', array(
        'label'     => __( 'Registration button label', 'infocamp-2017' ),
        'section'   => 'event_details',
        'type'      => 'text',
        'priority'  => 4
    ) );

    // Event copy
    $wp_customize->add_section( 'event_copy' , array(
        'title'      => __( 'Event Copy', 'infocamp-2017' ),
        'priority'   => 2,
    ) );


    $wp_customize->add_setting( 'theme_header', array('default' => '') );
    $wp_customize->add_control( 'theme_header', array(
        'label'     => __( 'Theme header', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'text',
        'priority'  => 1,
    ) );

    $wp_customize->add_setting( 'theme', array('default' => '') );
    $wp_customize->add_control( 'theme', array(
        'label'     => __( 'Theme', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'text',
        'priority'  => 2,
    ) );

    $wp_customize->add_setting( 'theme_copy', array('default' => '') );
    $wp_customize->add_control( 'theme_copy', array(
        'label'     => __( 'Theme copy', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'textarea',
        'priority'  => 3,
    ) );

    $wp_customize->add_setting( 'about_header', array('default' => '') );
    $wp_customize->add_control( 'about_header', array(
        'label'     => __( 'About header', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'text',
        'priority'  => 4,
    ) );

    $wp_customize->add_setting( 'about_copy', array('default' => '') );
    $wp_customize->add_control( 'about_copy', array(
        'label'     => __( 'About copy', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'textarea',
        'priority'  => 5,
    ) );

    $wp_customize->add_setting( 'participate_header', array('default' => '') );
    $wp_customize->add_control( 'participate_header', array(
        'label'     => __( 'Participation header', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'text',
        'priority'  => 6,
    ) );

    $wp_customize->add_setting( 'participate_copy', array('default' => '') );
    $wp_customize->add_control( 'participate_copy', array(
        'label'     => __( 'Participation copy', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'textarea',
        'priority'  => 7,
    ) );

    $wp_customize->add_setting( 'twitter_url', array('default' => '') );
    $wp_customize->add_control( 'twitter_url', array(
        'label'     => __( 'Twitter URL', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'text',
        'priority'  => 8,
    ) );

    $wp_customize->add_setting( 'facebook_url', array('default' => '') );
    $wp_customize->add_control( 'facebook_url', array(
        'label'     => __( 'Facebook URL', 'infocamp-2017' ),
        'section'   => 'event_copy',
        'type'      => 'text',
        'priority'  => 9,
    ) );

}
add_action( 'customize_register', 'infocamp2017_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function infocamp2017_customize_preview_js() {
	wp_enqueue_script( 'infocamp2017_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'infocamp2017_customize_preview_js' );
