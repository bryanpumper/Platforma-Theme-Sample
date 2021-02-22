<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Platforma_Theme_Sample
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!--<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'platforma-theme-sample' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'platforma-theme-sample' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'platforma-theme-sample' ), 'platforma-theme-sample', '<a href="http://underscores.me/">Bryan Urfano</a>' );
				?>
		</div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
