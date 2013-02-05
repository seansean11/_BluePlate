<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php _blueplate_content_nav( 'nav-above' ); ?>
							
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
							<header class="entry-header">
								<h2 class="entry-title"><?php the_title(); ?></h2>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '_blueplate' ), 'after' => '</div>' ) ); ?>
								<?php edit_post_link( __( 'Edit', '_blueplate' ), '<span class="edit-link">', '</span>' ); ?>
							</div><!-- .entry-content -->
							
						</article><!-- #post-<?php the_ID(); ?> -->

					<?php comments_template( '', true ); ?>


				<?php _blueplate_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>