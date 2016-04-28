<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php

twentyfourteen_post_thumbnail();
	if(get_post_meta($post->ID,"types",ture) == 'cases'){
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
				the_title('<h1 class="entry-title"><a href="' . $link . '" rel="bookmark">', '</a></h1>' );
			
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
