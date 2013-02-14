<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */

get_header(); ?>

	<div class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( __( 'Search Results for: %s', '_blueplate' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php _blueplate_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php _blueplate_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

	</div><!-- #content .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>