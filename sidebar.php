<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<!-- Sidebar Navigation -->
		<aside class="widget page-nav">
			<nav class="side-nav">
				<ul>
					<?php wp_list_pages( array('title_li'=>'','depth'=>2,'child_of'=>get_post_top_ancestor_id()) ); ?>
				</ul>
			</nav>
		</aside>	

	<?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->
				