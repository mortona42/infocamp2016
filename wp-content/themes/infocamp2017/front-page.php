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
            </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
