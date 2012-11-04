<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */
?>

<aside class="widget" role="complementary">
			
	<?php if ( dynamic_sidebar( 'sidebar-1' ) ) : ?>

	<?php endif; // end sidebar widget area ?>
				
	<!-- Sidebar Navigation -->
		<nav class="side-nav">
			<ul>
	   			<?php wp_list_pages( array('title_li'=>'','depth'=>2,'child_of'=>get_post_top_ancestor_id()) ); ?>
			</ul>
		</nav>
				
	<!-- Possible Callout -->
		<?php if (get_field('callout_picker')) {
			foreach(get_field('callout_picker') as $post_object):
		?>

		<section class="widget">
			<h5><?php the_field('title',$post_object->ID); ?></h5>
			<img src="<?php the_field('image',$post_object->ID); ?>">
			<p><?php the_field('text',$post_object->ID); ?></p><br />
			<a href="<?php the_field('link_url',$post_object->ID); ?>" class="button">Read More</a>
		</section>

		<?php endforeach; } ?>


</aside><!-- .widget -->
