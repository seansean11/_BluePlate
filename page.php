<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */

get_header(); ?>

			<div id="content" class="site-content" role="main">
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h2 class="entry-title"><?php the_title(); ?></h2>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'creative_beginnings' ), 'after' => '</div>' ) ); ?>
								<?php edit_post_link( __( 'Edit', 'creative_beginnings' ), '<span class="edit-link">', '</span>' ); ?>
							</div><!-- .entry-content -->
						</article><!-- #post-<?php the_ID(); ?> -->

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				
			</div><!-- #content .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>