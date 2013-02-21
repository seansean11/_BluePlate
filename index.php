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

	<div class="site-content" role="main">
		
		<header class="the-title entry-header">
			<h2 class="entry-title"><?php wp_title("",true); ?></h2>
		</header><!-- .entry-header -->
		
		<?php if ( have_posts() ) : ?>
			
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
						
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						<header class="entry-header">
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_blueplate' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							
							<div class="entry-meta">
								<?php _blueplate_posted_on(); ?>
								
								<span class="cat-links">
									<?php the_category(); ?>
								</span>
							</div><!-- .entry-meta -->

						</header><!-- .entry-header -->

						<?php if ( is_search() ) : // Only display Excerpts for Search ?>
							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div><!-- .entry-summary -->
							<?php else : ?>
							<div class="entry-content">
								<?php the_post_thumbnail(); ?>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="more-button blue-button">Read More</a>
							</div><!-- .entry-content -->
						<?php endif; ?>
						
					</article><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; ?>

			<?php paginate(); ?>
				
		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

	</div><!-- #content .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>