<?php
/**
 * The Header for our theme.
 *
 *
 * @package _BluePlate
 * @since _BluePlate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon"/> -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', '_blueplate' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main" class="wrapper">
	<?php do_action( 'before' ); ?>
	<header class="site-header" role="banner">
		<nav role="navigation" class="main-navigation">
			
			<h1><a class="site-logo" href="<?php echo bloginfo('url'); ?>"><?php bloginfo ('name'); ?></a></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=>'' ) ); ?>
			
		</nav><!-- .main-navigation -->
	</header><!-- #masthead .site-header -->