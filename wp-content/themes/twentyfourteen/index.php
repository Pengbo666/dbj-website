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
<body>
	<div id="carousel" class="carousel slide" data-ride="carousel">
	  	<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
	 	</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?=bloginfo('template_url')?>/images/source/slide1.png" alt="智能终端">
				<div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?=bloginfo('template_url')?>/images/source/slide2.png" alt="一目了然">
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?=bloginfo('template_url')?>/images/source/slide3.png" alt="内置电源">
	      <div class="carousel-caption">
	      </div>
	    </div>
	  </div>
	</div>

		<div class="col-sm-12 col-md-offset-2 col-md-8 gallery">
			<h2>我们为用户提供多样的服务平台</h2>
			<p class="lead">我们致力于为您提供更适合的服务</p>
			
			<div class="col-sm-4 gallery-item">
				<div class="gallery-container">
					<img src="<?=bloginfo('template_url')?>/images/source/qiji.png" alt="">
				</div>
			</div>
			<div class="col-sm-4 gallery-item">
				<div class="gallery-container">
					<img src="<?=bloginfo('template_url')?>/images/source/qiji.png" alt="祺迹车管">
				</div>
			</div>
			<div class="col-sm-4 gallery-item">
				<div class="gallery-container">
					<img src="<?=bloginfo('template_url')?>/images/source/qiji.png" alt="移动卫士">
				</div>
			</div>

			<button class="learn-more">了解更多>></button>
		</div>

	<div class="gallery-blue">
	<div class="col-sm-12 col-md-offset-2 col-md-8 gallery">
		<h2>同时还相应提供各类硬件设备</h2>
		<p class="lead">总有一款适合您的产品</p>
		
		<div class="col-sm-4 gallery-item">
			<div class="gallery-container">
				<img src="<?=bloginfo('template_url')?>/images/source/zj300.jpg" alt="">
			</div>
		</div>
		<div class="col-sm-4 gallery-item">
			<div class="gallery-container">
				<img src="<?=bloginfo('template_url')?>/images/source/zj300.jpg" alt="祺迹车管">
			</div>
		</div>
		<div class="col-sm-4 gallery-item">
			<div class="gallery-container">
				<img src="<?=bloginfo('template_url')?>/images/source/zj300.jpg" alt="移动卫士">
			</div>
			
		</div>
			<button class="learn-more">了解更多>></button>
		</div>
		
	</div>
	<div class="col-sm-12 gallery">
		<h2>新闻动态</h2>
		<div class="owl-carousel">
		    <div class="item"><h4>1</h4></div>
		    <div class="item"><h4>2</h4></div>
		    <div class="item"><h4>3</h4></div>
		    <div class="item"><h4>4</h4></div>
		    <div class="item"><h4>5</h4></div>
		    <div class="item"><h4>6</h4></div>
		    <div class="item"><h4>7</h4></div>
		    <div class="item"><h4>8</h4></div>
		    <div class="item"><h4>9</h4></div>
		    <div class="item"><h4>10</h4></div>
		    <div class="item"><h4>11</h4></div>
		    <div class="item"><h4>12</h4></div>
		</div>
	</div>
	
</body>








<div id="main-content" class="container">
<?php
/*	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}*/
?>

<!-- <div class="row"> 
     <h3 class=" news-left-bg center mt0 mb0"><a href="http://pr.huawei.com/cn/news/index.htm">新闻</a></h3>
 </div>  -->
<div class="row">
		<?php
/*		//echo $paged."*******";
			if ( have_posts() ) :
				// Start the Loop.
				$i = 3;
				while ( have_posts() && $i) : the_post();
					get_template_part( 'content', get_post_format() );
					$i = $i - 1;
				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;*/
		?>
</div>
	<?php
/*			if ( have_posts() ) :
				$i = 3;
				// Start the Loop.
				while ( have_posts() && $i) : the_post();
					get_template_part( 'content', 'cases' );
					$i = $i - 1;
				endwhile;
				// Previous/next post navigation.
				//twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				//get_template_part( 'content', 'none' );

			endif;*/
		?>
			
</div><!-- #main-content -->
<?php
/*echo "*%%%%%%%%%%%%%%%%%%%;";
wp_get_archives();
wp_list_pages();
wp_list_authors();
wp_dropdown_categories();
wp_dropdown_users();
wp_dropdown_pages();
wp_page_menu();
wp_nav_menu();
echo "^^^^^^^^^^^^^^^^^";*/
?>

<!-- <ul> -->
  <?php 
/*  wp_list_pages('include=54,48&title_li=<h2>' . __('Pages') . '</h2>' ); 
  echo "#########333";
  wp_page_menu('include=54,48&title_li=<h2>' . __('Pages') . '</h2>' );*/
  ?>
<!--   </ul> -->

 <?php
 //wp_get_archives();

 ?>
<?php
get_footer();


