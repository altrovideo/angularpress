<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenlemon
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'greenlemon' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'greenlemon' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __('http://zanca.it/', 'greenlemon'));?>" target="_blank">Theme by Cristiano Zanca</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
