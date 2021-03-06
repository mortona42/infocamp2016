<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package InfoCamp2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'infocamp2017' ); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <div id="navigation-wrapper">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="site-branding">
                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                    endif; ?>
                </div><!-- .site-branding -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i> <?php esc_html_e( '', 'infocamp2017' ); ?></button>
                <div id="menu-wrapper">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                </div>
            </nav><!-- #site-navigation -->
        </div>

        <?php if ( is_home() && is_front_page() ) : ?>
        <div id="event-details">
            <div class="event-details_wrapper">

                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <div class="site-description">
                        <span><?php echo $description; /* WPCS: xss ok. */ ?></span>
                    </div>
                    <?php
                endif; ?>

                <?php
                if ( get_theme_mod( 'event_date' )) {
                    $event_date = get_theme_mod( 'event_date');

                    // Convert date format.
                    $event_date = date_create_from_format('Y-m-d', $event_date);
                    $event_date = $event_date->format('F j, Y');
                }
                else {
                    $event_date = __( 'Configure date with the customizer.', 'infocamp-2017' );
                }
                ?>
                <div id="event-date"><?php echo $event_date; ?></div>

                <?php
                if ( ! $event_location = get_theme_mod( 'event_location' )) {
                    $event_location = __( 'Configure location with the customizer.', 'infocamp-2017' );
                }
                ?>
                <div id="event-location"><p><?php echo $event_location; ?></p></div>

                <?php
                if ( ! $registration_url = get_theme_mod( 'registration_url' )) {
                    $registration_url = '/';
                }
                if ( ! $registration_button = get_theme_mod( 'registration_button' )) {
                    $registration_button = __('Register', 'infocamp-2017');
                }
                ?>
                <div id="event-registration">
                    <form action="<?php echo $registration_url; ?>">
                        <input class="event-registration-button" type="submit" value="<?php echo $registration_button; ?>" />
                    </form>
                </div>
                <?php endif; ?>

            </div>
        </div><!-- #event-details -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
