<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mycavy_ru
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="wrapper-container shadow-container">
			<header>
				<figure class="logo-box box-menu-toggle">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/logo-1.png " alt="Российская Ассоциация заводчиков и любителей морских свинок">
					</a>
					<div id="js-toggle" class="left-panel__menu-toggle">
						<button class="header-menu-toggle"><span>menu</span></button>
					</div>
				</figure>
				<nav class="header-menu left-panel">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			</header>
