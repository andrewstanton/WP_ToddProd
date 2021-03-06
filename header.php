<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Todd Productions Inc.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tp' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	<div class="container">
	<div class="row">

	<div class="col-md-2">

	<?php
		//Custom Logo
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		
		//Logo
		if ( has_custom_logo() ) {
			echo '<a href="'.get_home_url().'" title="Home Page"><img src="'. esc_url( $logo[0] ) .'" class="header-logo"></a>';
			}
		//Or Put Name
		else{
			echo '<a href="'.get_home_url().'" title="Home Page">' . bloginfo( 'name' ) . '</a>';
		}
	?>
	
	</div>
	<div class="col-md-10 text-right">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="mobile-menu-button-container"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'tp' ); ?></button></div>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</div>

	</div><!--row-->
	</div><!--.container-->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
