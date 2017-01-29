<?php
/**
 * Front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package InfoCamp2017
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div id="front-page-sections">
                <?php
                $theme = get_theme_mod( 'theme' );
                $theme_header = get_theme_mod( 'theme_header' );
                $theme_copy = get_theme_mod( 'theme_copy' );
                ?>
                <section id="event-theme">
                    <div class="front-page-section_wrapper">
                        <h2><?php echo $theme_header; ?></h2>
                        <h3>&mdash;<?php echo $theme; ?>&mdash;</h3>
                        <p><?php echo $theme_copy; ?></p>
                    </div>
                </section>

                <?php
                $about_header = get_theme_mod( 'about_header' );
                $about_copy = get_theme_mod( 'about_copy' );
                ?>
                <section id="event-about">
                    <div class="front-page-section_wrapper">
                        <h2><?php echo $about_header; ?></h2>
                        <p><?php echo $about_copy; ?></p>
                    </div>
                </section>

                <?php
                $participate_header = get_theme_mod( 'participate_header' );
                $participate_copy = get_theme_mod( 'participate_copy' );

                $twitter_url = get_theme_mod( 'twitter_url' );
                $twitter_button = get_theme_mod( 'twitter_button' );
                $facebook_url = get_theme_mod( 'facebook_url' );
                $facebook_button = get_theme_mod( 'facebook_button' );
                ?>
                <section id="event-participate">
                    <div class="front-page-section_wrapper">
                        <h2><?php echo $participate_header; ?></h2>
                        <p><?php echo $participate_copy; ?></p>

                            <a class="button-link" href="<?php echo $twitter_url; ?>">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <span><?php echo $twitter_button; ?></span>
                            </a>

                            <a class="button-link" href="<?php echo $facebook_url; ?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <span><?php echo $facebook_button; ?></span>
                            </a>
                    </div>
                </section>

            </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
