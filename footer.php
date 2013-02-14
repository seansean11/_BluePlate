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
			<span class="copyright">Copyright &copy; <?php echo date('Y'); ?> Sean Michael Design, All Rights Reserved</span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_blueplate' ), '_blueplate', '<a href="http://www.seanmichael.me/" rel="designer">Sean Michael</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>