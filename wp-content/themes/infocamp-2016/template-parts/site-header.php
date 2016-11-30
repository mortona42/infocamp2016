<?php
/**
 * Template part for site header.
 **/
?>

<header id="masthead" class="site-header" role="banner">

    <?php if ( get_header_image() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img class='hero-img' src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
        </a>
    <?php endif; // End header image check. ?>

    <div class="site-header_overlay_wrapper">
        <div class="site-header_overlay_content">
            <div class="site-branding">

                <h1 id="site-title" class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p id="site-description" class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php
                endif; ?>
            </div><!-- .site-branding -->


            <?php
            if ( get_theme_mod( 'event_date' )) {
                $event_date = get_theme_mod( 'event_date');

                // Convert date format.
                $event_date = date_create_from_format('Y-m-d', $event_date);
                $event_date = $event_date->format('F j, Y');
            }
            else {
                $event_date = 'Configure date with the customizer.';
            }
            ?>
            <p id="event-date"><?php echo $event_date; ?></p>

            <?php
            if ( ! $event_location = get_theme_mod( 'event_location' )) {
                $event_location = 'Configure location with the customizer.';
            }
            ?>
            <p id="event-location"><?php echo $event_location; ?></p>

        </div>
    </div>

</header><!-- #masthead -->

<nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'infocamp-2016' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->