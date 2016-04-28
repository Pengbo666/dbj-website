<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package zerif

 */

?>



<footer id="footer">

<div class="container">
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2  col-lg-2" id="footer-div">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12" id="foot-div">
							<img alt="120x120" src="http://www.dbjtech.com/wp-content/themes/zerif-lite/images/footer-logo.png"/>
						</div>
					</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10  col-lg-10">
					<div class="row">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<h3>
								关于德百祺
							</h3>
							<ol>
								<li>
									企业概况
								</li>
								<li>
									领导团队
								</li>
								<li>
									核心技术
								</li>
								<li>
									企业文化
								</li>
								<li>
									企业资质
								</li>
							</ol>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<h3>
								合作伙伴
							</h3>
							<ol>

							</ol>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<h3>
								招贤纳士
							</h3>
							<ol>
							</ol>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<h3>
								联系我们
							</h3>
							<ol>
								<li>
									电话(Tel)：0756-3626868
								</li>
								<li>
									邮箱(E-email)：hr@dbjtech.com
								</li>
								<li>
									地址(Add)：广东省珠海市唐家湾软件园路1号南方软件园B1-1层
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
					<h3>
						 2015DBJ Technologies(Zhu Hai)Co.,Ltd.All Rights
					</h3>
				</div>
			</div>
		</div>
	</div>
</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->



<?php wp_footer(); ?>
<script>
$(document).ready(function(){


					$(window).scroll(function(){

		/*				if($(document).scrollTop() > 0){
							$('#main-nav').removeClass()
							$('#main-nav').addClass("navbar navbar-inverse bs-docs-nav fixed")
							$('#main-nav').css("background","rgba(255,255,255,"+(parseFloat($(document).scrollTop()*0.001)+0.5)+")")
							$('.navbar-inverse .navbar-nav ul.sub-menu').css("background","rgba(255,255,255,"+($(document).scrollTop()*0.001+0.5)+")")
						}else{
							$('#main-nav').removeClass()
							$('#main-nav').addClass("navbar navbar-inverse bs-docs-nav")
						}*/
						
						});	
})
</script>
<script  language="javascript" type="text/javascript" src="<?=get_template_directory_uri()?>/js/load.js"></script>
<div id="screen_width" style="width:100%;"></div>
</body>
</html>
