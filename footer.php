<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( '_blueplate_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_blueplate' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_blueplate' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_blueplate' ), '_blueplate', '<a href="http://www.seanmichael.me/" rel="designer">Sean Michael</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .wrapper -->

<?php wp_footer(); ?>

</body>
</html>