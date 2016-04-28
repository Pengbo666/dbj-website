<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				

				<?php
				echo single_cat_title( '', false );
					$cat = get_category_by_slug('solution');
					//$cat = get_category_by_slug($slug);
				    echo $cat->term_id;       //取得分类id
				    echo $cat->count;         //取得分类文章数统计
				    echo $cat->description;   //获取分类的描述
				    echo $cat->name;          //获得分类的名称
				    echo $cat->slug;          //获取分类的别名
				    echo $cat->parent;        //获得对当前分类的父级分类的引用
					// Show an optional term description.
					//$arr = get_the_category();
					//var_dump($arr);
/*					for($i=0;$i<count($arr);$i++){
						echo $arr[$i];
					}*/
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'all' );

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
/*get_sidebar( 'content' );
get_sidebar();
get_footer();*/
