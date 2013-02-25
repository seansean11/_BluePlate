<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays the front page of the website.
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */

get_header(); ?>

			<div class="site-content" role="main">
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h2 class="entry-title"><?php the_title(); ?></h2>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '_blueplate' ), 'after' => '</div>' ) ); ?>
							</div><!-- .entry-content -->
						</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>
				
			</div><!-- #content .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>