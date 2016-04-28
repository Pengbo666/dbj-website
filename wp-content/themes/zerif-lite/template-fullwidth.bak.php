<?php

/*
Template Name: Full Width Page
*/



get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php 		$post_id = $post->ID;
			$descriptions = get_post_meta($post_id, 'descriptions', true);
			$img_src = get_post_meta($post_id, 'images', true);
			if($img_src){
				echo '<img style="width:100%;" src="'.$img_src.'">';
			}
	?>

<div id="content" class="site-content">

<div class="container">



<div class="content-left-wrap col-md-12">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', 'page' ); ?>



				<?php

					// If comments are open or we have at least one comment, load up the comment template

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;

				?>



			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- .content-left-wrap -->




</div><!-- .container -->

<?php get_footer(); ?>