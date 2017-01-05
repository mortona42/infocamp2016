<?php
/**
 * Template part for site header.
 **/
?>

<?php get_template_part( 'template-parts/site-menu' ); ?>

<header id="masthead" class="site-header" role="banner">
    <?php if ( get_header_image() ) : ?>
        <img class='hero-img' src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
    <?php endif; // End header image check. ?>

    <div id="header-wrapper">

        <div class="site-header_overlay_wrapper">


            <div class="site-header_overlay_content">


    <!--                --><?php
    //                $description = get_bloginfo( 'description', 'display' );
    //                if ( $description || is_customize_preview() ) : ?>
    <!--                    <p id="site-description" class="site-description">--><?php //echo $description; /* WPCS: xss ok. */ ?><!--</p>-->
    <!--                    --><?php
    //                endif; ?>


                <?php
                if ( ! $event_location = get_theme_mod( 'event_description' )) {
                    $event_location = 'Configure description with the customizer.';
                }
                ?>
                <div id="event-description"><span><?php echo $event_location; ?></span></div>


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
                <div id="event-date"><?php echo $event_date; ?></div>

                <?php
                if ( ! $event_location = get_theme_mod( 'event_location' )) {
                    $event_location = 'Configure location with the customizer.';
                }
                ?>
                <div id="event-location"><?php echo $event_location; ?></div>

            </div>
        </div>
    </div>

</header><!-- #masthead -->