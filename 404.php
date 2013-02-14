<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */

get_header(); ?>

	get_header(); ?>

	<div id="content" class="site-content" role="main">

		<article id="post-0" class="post error404 not-found">
			<header class="entry-header">
			<h2>Oops! That page can&rsquo;t be found.</h2>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p><?php _e( 'That page can&rsquo;t be found.', '_blueplate' ); ?>
				</br><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below.', '_blueplate' ); ?></p>


				<?php the_widget( 'WP_Widget_Recent_Posts','', 'before_title=<h3 class="widgettitle">&after_title=</h3>'); ?>


			</div><!-- .entry-content -->
		</article><!-- #post-0 .post .error404 .not-found -->

	</div><!-- #content .site-content -->

<?php get_footer(); ?>

<?php get_footer(); ?>