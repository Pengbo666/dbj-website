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
	if(get_post_meta($post->ID,"types",ture) == 'news'):
	$post_id = $post->ID;
	$descriptions = get_post_meta($post_id, 'descriptions', true);
	$img_src = get_post_meta($post_id, 'images', true);
	$href = esc_url( get_permalink() ) ;
	?>
	<div class="col-xs-12 col-sm-12 col-md-4" vheight="height">
		<div class="thumbnail">
			<img class="carousel-inner img-responsive img-rounded" src="<?=$img_src?>" alt="...">
			<div class="caption">
				<h4><a href='<?=$href?>'><?=the_title()?></a></h3>
				<p><?=$descriptions?></p>
			</div>
		</div>
	</div>
<?php
endif;
?>

