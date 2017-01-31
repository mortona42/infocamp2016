<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package InfoCamp2017
 */

?>

	</div><!-- #content -->

    <?php
    $footer_image = wp_get_attachment_image_src( get_theme_mod( 'footer_image' ), 'original' );
    $footer_image = $footer_image[0];
    ?>
    <style type="text/css">
        footer#colophon {
            background: url('<?php echo $footer_image ?>') no-repeat bottom;
            background-size: cover;
        }
    </style>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
            <div id="footer_menu">
                <h3>More</h3>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu-footer' ) ); ?>
            </div>

            <div id="footer_contact">
                <h3>Contact</h3>
                <ul>
                    <li>
                        <form action="<?php echo $twitter_url; ?>">
                            <button class="" type="submit" value="twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></button>
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $facebook_url; ?>">
                            <button class="" type="submit" value="facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></button>
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $facebook_url; ?>">
                            <button class="" type="submit" value="facebook" ><i class="fa fa-envelope" aria-hidden="true"></i></button>
                        </form>
                    </li>
                </ul>
            </div>

            <?php
            $footer_copyright = get_theme_mod( 'footer_copyright' );
            ?>
            <p id="copyright"><?php echo $footer_copyright; ?></p>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
