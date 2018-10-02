<?php
/**
 * Header file of the theme
 *
 * @package Fictional University
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo( 'charset' ) ?>>
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_title();?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
	<div class="container">
		<h1 class="school-logo-text float-left"><a href="<?php echo site_url(); ?>"><strong>Fictional</strong> University</a></h1>
		<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
		<i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
		<div class="site-header__menu group">
			<nav class="main-navigation">
				<?php wp_nav_menu( array(
						'theme_location' => 'headerMenuLocation'
				) ) ?>
			</nav>
			<div class="site-header__util">
				<a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
				<a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
				<span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
			</div>
		</div>
	</div>
</header>