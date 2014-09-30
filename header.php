<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title><?php wp_title( '»', true, "right" ); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/doubletaptogo.min.js"></script>
	<script type="text/javascript">
	$(function () {
		if ( $(window).width() > 700) {
		$( '#mainnav .main-menu-container li:has(ul)' ).doubleTapToGo();
		}
	});
	$(window).resize(function() {
		if ( $(window).width() > 700) {
		$( '#mainnav .main-menu-container li:has(ul)' ).doubleTapToGo();
		}
	}).resize()
		</script>
    <?php wp_head(); ?>
</head>
<body>

		<nav id="mainnav">
		<input type="checkbox" id="cbmenu" /> <label id="lmenu1" for="cbmenu">Menu  &#9660;</label><label id="lmenu2" for="cbmenu">Menu  &#9650;</label>

		<?php // wp_nav_menu( array( 'theme_location' => 'mainmenu' ) ); ?>
		<?php wp_nav_menu( array('menu_class' => 'menu',
                                    'container' => 'div',
                                    'container_class' => 'main-menu-container',
                                    'theme_location' => 'mainmenu',
                                    'walker'=> new Lipi_Nav_Menu()
                                    ) ); ?>
		<?php get_search_form(); ?>
		</nav>
		<header id="mainheader">
			<a class="homelink" href="<?php bloginfo('url'); ?>"><img alt="<?php bloginfo( "name" ); ?>" src="<?php bloginfo('template_url'); ?>/images/logo.png" id="headerlogo"/><img alt="<?php bloginfo( "name" ); ?>" src="<?php bloginfo('template_url'); ?>/images/logo2.png" id="headerlogo2"/></a>
			<div class="sidebar-header">
				<?php if ( !function_exists('dynamic_sidebar') ||
			   !dynamic_sidebar('sidebar-header') ) : ?>
	<?php endif; ?>
			</div>
		</header>
	<div id="wrapper">







		
		<div class="content">
			<div class="contentrow">
