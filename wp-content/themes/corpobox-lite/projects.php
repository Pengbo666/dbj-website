<?php
/**
 * The template for WooProject page.
 * Template Name: WooProject
 *
 * @package Corpobox
 */

get_header(); ?>

<header class="page-header">
<?php
	$args = array(
		'delimiter' => ' &#8250; ',
	);
?>
	<?php woocommerce_breadcrumb( $args ); ?>
	<h1 class="page-title"><?php the_title(); ?></h1>
</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<?php projects_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar( 'projects' ); ?>

<?php get_footer(); ?>
