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

<!-- <div class="container"> -->
<div class="container">


<div class="content-left-wrap col-md-12" style="background:#fff">

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

<?php 		
	$post_id = $post->ID;
			$img_src_bottom = get_post_meta($post_id, 'images_bottom', true);
			if($img_src_bottom){
				echo '<img name="about" vname="about" style="width:100%;" src="'.$img_src_bottom.'">';
			}
	?>
<?php if($img_src_bottom == 'http://www.dbjtech.com/wp-content/themes/zerif-lite/images/about_dbj/our.png'){ ?>
<div name="about" vname="culture">
<div style="text-align: center; padding-bottom: 5px;padding-top:65px;"><span style="font-size: 30px; font-weight: 700;color:rgb(100,100,100); padding-bottom: 4px;letter-spacing: 0.08em;">企业文化</span></div>
<div style="text-align: center;padding-bottom:20px;"><span style="border-top:3px solid rgb(190,190,190);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
<div id="culture">
	 <div class="row" style="margin-top:2%;">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="culture-left">
					<div >
						<h3>
						尊重人才
						</h3>
						<p >
						“让员工幸福快乐”、平等、公平、任人唯贤。我们为员工提供最优的资源和发展机会，让他们充分施展才华，共享研发成果和经济收益。 
						</p>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="culture-right">
					<div >
						<h3>
							追求卓越
						</h3>
						<p >
							尽我们最大的努力，以实事求是，创新进取，团结协作的精神，践行“开发世界最好产品”的诺言，在我们负责的每个环节上做到最好。
						</p>
					</div>
				</div>
	</div>
	<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="culture-left-two" >
					<div >
						<h3>
							杜绝腐败
						</h3>
						<p>
							遵守道德和法律规范，完善企业管理制度，尊重消费者及合作伙伴，杜绝一切形式的腐败和浪费，公正、透明、正当经营。
						</p>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img alt="140x140" src="http://www.dbjtech.com/wp-content/themes/zerif-lite/images/about_dbj/culture.png" />
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="culture-right-two">
					<div>
						<h3>
							持续创新
						</h3>
						<p>
							创新是企业发展的灵魂。我们着眼于未来，紧随市场需求，力争开创新的技术和产品方向，让德百祺走向长期的成功和繁荣。
						</p>
					</div>
				</div>
	</div>

	<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="culture-bottom">
					<div>
						<h3 >
							实现共赢
						</h3>
						<p>
							企业发展的最终目的是使国家、企业、个人均收益。我们将肩负起所应承担的社会责任，追求与国家、合作商、员工的多方共赢。
						</p>
					</div>
                </div>
	</div>
</div>

 <div class="row" style="margin-top:2%;">&nbsp;</div>

</div>
<?php 
}?>
</div>
<!-- </div> --><!-- .container -->

<?php get_footer(); ?>