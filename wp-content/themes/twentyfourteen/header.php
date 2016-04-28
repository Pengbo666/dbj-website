<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php //echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link href="<?=bloginfo('template_url')?>/css/style.css" rel="stylesheet" type="text/css"/>
		<!-- <link rel="stylesheet"  type="text/css" href="<?=bloginfo('template_url')?>/main/lib/bootstrap-3.3.4-dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/lib/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/lib/bower_components/owl.carousel/src/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/lib/bower_components/owl.carousel/src/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/css/app.css">
</head>
<?php //echo bloginfo('stylesheet_url')."*********".bloginfo('template_url');?>
<body <?php body_class(); ?>
<header>
		<div class="container">
			<img src="<?=bloginfo('template_url')?>/images/source/logo.png" alt="logo" class="logo">
			<label class="menu-btn" for="toggle" onclick>
				<span>toggle menu</span>
			</label>
			<input id="toggle" type="checkbox" />
			<nav>
				<?php 
				$current = 'current';
					//twentyfourteen_post_thumbnail();
					//wp_list_categories();
	//if(get_post_meta($post->ID,"types",ture) == 'news'):
	//echo $post_id = $post->ID."***********";
				//echo $_SERVER[HTTP_HOST];//wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '', 'menu_id' => 'nav' ) ); ?>
				<ul id="nav">
					<li class="<?=$current?>"><a href="http://<?=$_SERVER[HTTP_HOST]?>">首页</a></li>
					<li >
						<a href="http://<?=$_SERVER[HTTP_HOST]?>/index.php/products/" class="contains-sub multi">产品介绍
						<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
						</a>
						<ul class="submenu">
							<li><a href="http://<?=$_SERVER[HTTP_HOST]?>/index.php/services/">服务平台</a></li>
							<li><a href="#">硬件产品</a></li>
						</ul>
					</li>
					<li><a href="http://<?=$_SERVER[HTTP_HOST]?>/index.php/products/">解决方案</a></li>
					<li>
						<a href="#" class="contains-sub multi">关于我们
							<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
						</a>
						<ul class="submenu">
							<li><a href="#">公司简介</a></li>
							<li><a href="#">关键技术</a></li>
							<li><a href="#">资质及奖励</a></li>
							<li><a href="#">发展历程</a></li>
						</ul>
					</li>
					<li id="close"><label for="toggle">Close</label></li>
				</ul> 
			</nav>
		</div>
</header><!-- #masthead -->
<div id="main" class="site-main">
