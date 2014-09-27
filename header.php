<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>

		<nav id="mainnav">
		<input type="checkbox" id="cbmenu" /> <label id="lmenu1" for="cbmenu">Menu  &darr;</label><label id="lmenu2" for="cbmenu">Menu  &uarr;</label>

		<?php // wp_nav_menu( array( 'theme_location' => 'mainmenu' ) ); ?>
		<?php wp_nav_menu( array('menu_class' => 'menu',
                                    'container' => 'div',
                                    'container_class' => 'main-menu-container',
                                    'theme_location' => 'mainmenu',
                                    'walker'=> new Lipi_Nav_Menu()
                                    ) ); ?>
		</nav>
		<header id="mainheader">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" id="headerlogo"/></a>
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo2.png" id="headerlogo2"/></a>
			<div class="sidebar-header">
				<?php if ( !function_exists('dynamic_sidebar') ||
			   !dynamic_sidebar('sidebar-header') ) : ?>
	<?php endif; ?>
			</div>
		</header>
	<div id="wrapper">







		
		<div class="content">
			<div class="contentrow">
