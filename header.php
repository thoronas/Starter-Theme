<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crew_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'crew-theme' ); ?></a>

	<header id="masthead" class="site-header row" role="banner">
		<div class="site-branding columns-4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo"><?php bloginfo( 'name' ); ?></a>
		</div><!-- .site-branding -->

		<a href="#" class="burger-trigger">
			<span></span>
			<span></span>
			<span></span>
		</a>

		<nav id="site-navigation" class="main-navigation columns-8" role="navigation">

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="mobile-navigation-container">
			<div id="mobile-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-primary-menu' ) ); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
