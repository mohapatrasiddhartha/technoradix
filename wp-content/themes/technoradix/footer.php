<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Techno Radix 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'technoradix_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'technoradix' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'technoradix' ); ?>"><?php printf( __( 'Proudly powered by %s', 'technoradix' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>