<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */

get_header(); ?>

	<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php _blueplate_content_nav( 'nav-above' ); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'creative_beginnings' ), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->


			<?php _blueplate_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template( '', true );
			?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>