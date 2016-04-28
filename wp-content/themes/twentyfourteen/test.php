
	<link rel="stylesheet"  type="text/css" href="wp-content/themes/twentyfourteen/main/lib/bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="wp-content/themes/twentyfourteen/main/style.css">
	<link rel="stylesheet" type="text/css"  href="wp-content/themes/twentyfourteen/main/small.css" />
	<script  language="javascript" type="text/javascript" src="wp-content/themes/twentyfourteen/main/jquery-1.11.3.min.js"></script>
	<script  language="javascript" type="text/javascript" src="wp-content/themes/twentyfourteen/main/main.js"></script>
	<link  href="wp-content/themes/twentyfourteen/main/lib/videojs/video.js-stable/dist/video-js/video-js.css" rel="stylesheet">
	<script src="wp-content/themes/twentyfourteen/main/lib/videojs/video.js-stable/dist/video-js/video.js"></script>
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
						<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
		</div>













<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<div style="padding-top:13px;background:white;">
	<div class="container" >
	111111111111
	</div>
</div>
<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();







#content.php#content.php#content.php#content.php#content.php#content.php#content.php#content.php#content.php#content.php#content.php#content.php#content.php

<?php

twentyfourteen_post_thumbnail();
	if(get_post_meta($post->ID,"types",ture) == 'news'){
			//echo get_post_meta($post->ID,"types",ture)."***************".get_post_type();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
					$post_id = $post->ID;
					echo get_post_meta($post_id, 'descriptions', true);
					echo "<image src='".get_post_meta($post_id, 'images', true)."' style='width:100%;'>";
	?>

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php //echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
		</div>
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				//the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				
				//echo $web_url = bloginfo('template_url')."*********";
				//echo $title_url = $web_url.'/index.php/2015/05/19/testone/';
				if(esc_url( get_permalink() ) == $title_url){
					$link = $web_url.'/?p=48';
				}else{
					$link = esc_url( get_permalink() );
				}
				the_title('<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			
			endif;
		?>

		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					//twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php //comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php
				endif;

				//edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
		//the_descriptions();
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->

<?php
}
/*echo '*************';
wp_list_categories();
 wp_list_pages();
  wp_list_pages('depth=1&title_li=0&sort_column=menu_order');
echo '*************';
 the_tags(); 
 echo the_tags('Social tagging: ',' > '); 

 the_category(' '); 
echo '#######################';
the_content( $more_link_text, $strip_teaser, $more_file ); */
?>
#content.php#content.php#content.php#content.php#content.php#content.php#content.php




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
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
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
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>
<!-- #masthead -->
<header id="masthead" class="site-header" role="banner" >
			<div class="container">
				<div class="header-main" >
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
						<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
				</div>
			</div>
</header><!-- #masthead -->
<div id="main" class="site-main">

	<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
