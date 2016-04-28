$(document).ready(function(){
	function set_map(obj){  
		/*alert(123)*/

	}  
	window.onload=function(){  
	  window.onresize = set_map;  
	  	var obj = $(window).width()
		if(obj){
	  		set_map(obj);  
		}
	}  


	/*$('#map_div').width($(window).width())*/
	//$('#screen_width').width($('[name="img_map2"]').width())
	//$('#map_div1').css("left",$('[name="img_map2"]').width()*(130/1916)+$('#map_div1').width()+20+'px')
});

			$(document).ready(function(){
			$("#img2").bind("mousemove",function(e){
			//这里可得到鼠标X坐标
			var pointX = e.pageX;
			//这里可以得到鼠标Y坐标
			var pointY = e.pageY;
			console.log(pointX,pointY)
			});
			});

$(document).ready(function(){
/*	$('#site-navigation ul li').unbind("mouseover");
	$('#site-navigation ul li').mouseover(function(){
		$(this).find("a").css("color","rgb(49,191,180)");
		$(this).find("ul li a").css("color","rgb(80,80,80)")
	})
	$('#site-navigation ul li').unbind("mouseout");

	$('#site-navigation ul li').mouseout(function(){
		$(this).find("a").css("color","rgb(80,80,80)");
	})

	$('#site-navigation ul li').click(function(){


	})*/
	$('.sub-menu li').unbind("click")
		$('.sub-menu li').bind("click",function(){
			var href = $(this).find("a").attr("href")
			location.href = href
	})

	$('.sub-menu li').mouseover(function(){
		$(this).find("a").css("color","rgb(49,191,180)");
	})

	$('.sub-menu li').mouseout(function(){
		$(this).find("a").css("color","rgb(80,80,80)");
	})

	var obj = $('#bottom-show').html()
	if(obj){
		var name = window.location.search;
		name = name.replace("\?","")
		if(name == obj){
				$('[name="about"]').show()/*each(function(i){
					$(this).show()
				})*/

		}else{
			$('[name="about"]').each(function(i){
				var vname = $(this).attr("vname")
				if(vname != name){
					$(this).hide()
				}else if(vname == name){
					$(this).show()
				}
			})
		}
		//alert(obj)
		//alert(window.location.search)
	}

	$('[name="show-details"]').click(function(){
		var vtype = $(this).parent().find("[name='details']").attr("vtype")
		if(vtype == 'true'){
			$(this).parent().find("[name='details']").slideDown(1500)
			$(this).find("[name='updown']").removeClass()
			$(this).find("[name='updown']").addClass("col-xs-1 col-sm-1 col-md-1 col-lg-1 cssup")
			$(this).parent().find("[name='details']").attr("vtype",'false')
		}else{
			$(this).parent().find("[name='details']").slideUp(1500)
			$(this).find("[name='updown']").removeClass()
			$(this).find("[name='updown']").addClass("col-xs-1 col-sm-1 col-md-1 col-lg-1 cssdown")
            $(this).parent().find("[name='details']").attr("vtype",'true')
		}
	})

	$('[name="solution-select"]').click(function(){
		$('[name="solution-select"]').removeClass()
		$('[name="solution-select"]').addClass("unactive")
		$(this).removeClass()
		$(this).addClass("active")
		var vname = $(this).attr("vname");
		$('[name="solution-selections"]').each(function(){
			var vid = $(this).attr("id")
			if(vid != vname){
				$(this).slideUp(1300)
			}
		})
		$('#'+vname).slideDown(1000)

	})

/*	alert(window.location.hash);*/

	/*window.location.search*/


})