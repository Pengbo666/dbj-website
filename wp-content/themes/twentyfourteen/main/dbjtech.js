//responsive
function carouselResponsive(){
	var $width = $(window).width();
	if( $width > 1920 ){ $width = 1920; }
	if( $width > 1919 ){
		var $wrapRatio = parseFloat( 1020 / 1920 ).toFixed(3);
		var $wrapHeight = Math.round( $width * $wrapRatio );
		$("#carousel_wrap").height($wrapHeight);
	}else	if( $width > 1279 ){
		var $wrapRatio = parseFloat( 694 / 1280 ).toFixed(3);
		var $wrapHeight = Math.round( $width * $wrapRatio );
		$("#carousel_wrap").height($wrapHeight);
	}else	if( $width > 768 ){
		var $wrapRatio = parseFloat( 574 / 1024 ).toFixed(3);
		var $wrapHeight = Math.round( $width * $wrapRatio );
		$("#carousel_wrap").height($wrapHeight);
	}else{
		var $wrapRatio = parseFloat( 1072 / 768 ).toFixed(3);
		var $wrapHeight = Math.round( $width * $wrapRatio );
		$("#carousel_wrap").height($wrapHeight);	
	}
}
carouselResponsive();
$(window).resize(function(){
	carouselResponsive();
});
function vodOpen( movieAddress , uniqueId ){
	var str="<iframe id='"+uniqueId+"' src='https://www.youtube.com/embed/"+movieAddress+"?enablejsapi=1&version=3&feature=player_embedded&wmode=opaque' frameborder='0' allowfullscreen></iframe>"
	$("#carousel_wrap .vod_player iframe").remove();
	$("#carousel_wrap .vod_player").append(str).show();
	$(".overlay.background").show();

	$("#PlayPause .btn_stop").removeClass("on").next().addClass("on");
	
	if( msie < 0 ){
		clearInterval( animation );
	}else{
		clearInterval( ieSlideShow );
	}
}

var userAgent = window.navigator.userAgent;
var msie = userAgent.indexOf("MSIE 9");

if( userAgent.indexOf("MSIE 8") > -1 ) {
	msie = userAgent.indexOf("MSIE 8");
}

function vodClose(){
	//$("#carousel_wrap .vod_player iframe").remove();
	$("#carousel_wrap .vod_player, .overlay.background").hide();
	$("#carousel_wrap .vod_player .video_box").removeClass("on");
	$("#carousel_wrap .vod_player .video_mobile video").remove();
}

function vodOpen2(index){
	
	//web : brightcove player , mobile : video tag
	var UserAgent = window.navigator.userAgent;
	if (UserAgent.match(/iPhone|iPod|iPod2|ipad|ipad2|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null){
		//mobile
		$("#carousel_wrap .vod_player, .overlay.background").show();
		$("#carousel_wrap .vod_player .video_mobile video").remove();
		var $width = $(window).width();
		var $ratio = parseFloat( 360 / 640 );
		var margin = 30 ;
		if( $width < 481 ){ margin = 10 ; }
		var $height = $(window).height();
		var $scroll = $(window).scrollTop();
		var videoHeight = Math.round(( $width * $ratio ) - margin );
		var posTop = ( $height - videoHeight )/2 + $scroll - 50 ;
		console.log(videoHeight);
		$("#carousel_wrap .vod_player .playerbutton").css("top",(posTop-32)+"px");

		if( index == "1" ){
			var url = "http://brightcove04.brightcove.com/23/923270636001/201504/3534/923270636001_4191214664001_Galaxy-S6---------.mp4"
		}else{
			var url = "http://brightcove04.brightcove.com/23/923270636001/201504/3471/923270636001_4160532607001_SUHD-TV-Cooking-30s-0403.mp4"
		}
		var str = '<video controls poster="/cn/next/images/video_poster'+index+'.jpg">';
		str+='<source src="'+url+'" type="video/mp4">';
		str+='</video>';
		
		$("#carousel_wrap .vod_player .video_mobile").append(str);
		$("#carousel_wrap .vod_player .video_mobile").css("top", posTop+"px").addClass("on");
		$("#carousel_wrap .vod_player .video_mobile video").height(videoHeight);

		//video stop
		$("#PlayPause .btn_stop").removeClass("on").next().addClass("on");
		
		if( msie < 0 ){
			clearInterval( animation );
		}else{
			clearInterval( ieSlideShow );
		}

	}else{
		//web
		var userAgent = window.navigator.userAgent;
		//var ie = -1;
		var trident = userAgent.match(/Trident\/(\d.\d)/i);
        //if( trident != null )
		//userAgent.indexOf("IE");
		
		if( trident != null ){
			window.open("video"+index+".html", "video"+index+"", "width=640, height=360, left=0, top=0, menubar=no, status=no, toolbar=no, scrollbars=no");		
		}else{
			$("#carousel_wrap .vod_player, .overlay.background").show();
			$("#carousel_wrap .vod_player .video_box.num"+index).addClass("on");
			//video stop
			$("#PlayPause .btn_stop").removeClass("on").next().addClass("on");
			
			if( msie < 0 ){
				clearInterval( animation );
			}else{
				clearInterval( ieSlideShow );
			}
		}
	}

}

if( msie < 0 ){
	//dbj js
	var mainVisualCount = $("#carousel_wrap li").length;
	var aniNumber = 1 ;
	var aniTime = 5000 ;
	function rollingAni(){ //rolling
		mySwipe.slide( aniNumber );
		if( aniNumber > 2 ){ aniNumber = 0 }
	}
	var animation = setInterval(rollingAni, aniTime);
	$("#carousel_wrap .btn_controls .pages a").eq(0).addClass("on");

	window.mySwipe = $("#home_carousel").dbj({
		callback: function(index, element) {
			$("#carousel_wrap .btn_controls .pages a").each(function(){
				$(this).removeClass("on");
			});
			$("#carousel_wrap .btn_controls .pages a").eq(index).addClass("on");
			$("#carousel_wrap").removeClass().addClass("carousel_back"+(index+1));
			$("#carousel_wrap #shadow_left, #carousel_wrap #shadow_right").removeClass().addClass("theme"+(index+1));
			aniNumber = index+1;
		},
		transitionEnd: function(index, element) {
		},
		stopPropagation : true,
		//continuous : true
	}).data("dbj");
	$("#carousel_wrap .btn_controls .pages a").bind("click touch", function(){
		if( $("#PlayPause .btn_play").hasClass("on") ){
			var index = parseInt( $(this).attr("title").replace("slide","") ) - 1;
			mySwipe.slide( index );
		}else{
			clearInterval( animation );
			var index = parseInt( $(this).attr("title").replace("slide","") ) - 1;
			mySwipe.slide( index );
			animation = setInterval(rollingAni, aniTime);
		}
		return false;
	});
	//btn play / pause
	$("#PlayPause .btn_stop").bind("click focus", function(){
		$(this).removeClass("on").next().addClass("on");
		clearInterval( animation );
		sendClickCode('content_click_count', 'homecontents rolling:stop'); //추가
	});
	$("#PlayPause .btn_play").bind("click", function(){
		$(this).removeClass("on").prev().addClass("on");
		animation = setInterval(rollingAni, aniTime);
	});

}else{

	$("#carousel_wrap .carousel").css("visibility","visible");
	$("#carousel_wrap .btn_controls .pages a").eq(0).addClass("on");
	var sliderTarget = $("#carousel_wrap .carousel .carousel_inner li");
	sliderTarget.css("position","absolute");
    var ie8w;
    if(userAgent.indexOf("MSIE 8")>-1){
	ie8w=1280;
	}else{
	ie8w=$(window).width();	
	}
	//alert(ie8w);
    var slideWidth = ie8w;
	sliderTarget.width(slideWidth);
	$(window).resize(function(){
		slideWidth = ie8w;
		sliderTarget.width(slideWidth);
	});

	sliderTarget.each(function(index){
		if( index > 0 ){
			sliderTarget.eq(index).css("left", slideWidth );
		}
	});

	var ieSpeed = 900;
	var ieTime = 5000;
	var ieSlideShow = setInterval( ieSlideMov , ieTime );

	var nowNum = 0;
	var nextNum = 1;
	function ieSlideMov(){

		//console.log("now:"+nowNum+", next:"+nextNum);
		sliderTarget.each(function(index){
			if( index != nowNum ){
				sliderTarget.eq(index).css("left", slideWidth );
			}
		});	
		
		sliderTarget.eq(nowNum).animate({ left : - slideWidth }, ieSpeed, function(){
			$(this).css("left", slideWidth );
		});
		sliderTarget.eq(nextNum).animate({	left : 0	}, ieSpeed );
		
		//control btn + background change
		$("#carousel_wrap .btn_controls .pages a").each(function(){
			$(this).removeClass("on");
		});
		$("#carousel_wrap .btn_controls .pages a").eq(nextNum).addClass("on");
		$("#carousel_wrap").removeClass().addClass("carousel_back"+(nextNum+1));
		$("#carousel_wrap #shadow_left, #carousel_wrap #shadow_right").removeClass().addClass("theme"+(nextNum+1));
		
		nowNum++;
		nextNum = nowNum + 1;
		if( nowNum == 2 ){
			nextNum = 0;
		}else if( nowNum > 2 ){
			nowNum = 0;
			nextNum = 1;
		}

	}

	$("#carousel_wrap .btn_controls .pages a").bind("click", function(){
		if( $("#PlayPause .btn_stop").hasClass("on") ){
			clearInterval( ieSlideShow );
		}
		//console.log("Click // now:"+nowNum+", next:"+nextNum);	

		nextNum = $(this).index();
		if( nextNum > nowNum ){ //우슬라이드
			
			sliderTarget.each(function(index){
				if( index != nowNum ){
					sliderTarget.eq(index).css("left", slideWidth );
				}
			});
			sliderTarget.eq(nowNum).animate({ left : - slideWidth }, ieSpeed, function(){
				$(this).css("left", slideWidth );
			});	
		
		}else{ //좌슬라이드
		
			sliderTarget.each(function(index){
				if( index != nowNum ){
					sliderTarget.eq(index).css("left", - slideWidth );
				}
			});
			sliderTarget.eq(nowNum).animate({ left : slideWidth }, ieSpeed, function(){
				$(this).css("left", slideWidth );
			});
		
		}
		
		sliderTarget.eq(nextNum).animate({	left : 0 }, ieSpeed );
		
		nowNum = nextNum ; 

		$("#carousel_wrap .btn_controls .pages a").each(function(){
			$(this).removeClass("on");
		});
		$("#carousel_wrap .btn_controls .pages a").eq(nextNum).addClass("on");
		$("#carousel_wrap").removeClass().addClass("carousel_back"+(nextNum+1));
		$("#carousel_wrap #shadow_left, #carousel_wrap #shadow_right").removeClass().addClass("theme"+(nextNum+1));

		nextNum = nowNum + 1;
		if( nowNum == 2 ){
			nextNum = 0;
		}else if( nowNum > 2 ){
			nowNum = 0;
			nextNum = 1;
		}

		if( $("#PlayPause .btn_stop").hasClass("on") ){
			ieSlideShow = setInterval( ieSlideMov , ieTime );
		}
		return false;
	});


	//btn play / pause
	$("#PlayPause .btn_stop").bind("click focus", function(){
		$(this).removeClass("on").next().addClass("on");
		clearInterval(ieSlideShow);
	});
	$("#PlayPause .btn_play").bind("click", function(){
		$(this).removeClass("on").prev().addClass("on");
		ieSlideShow = setInterval( ieSlideMov , ieTime );
	});
}

//preload img
var cache = [];
$.preLoadImages = function() {
	var args_len = arguments.length;
	for (var i = args_len; i--;) {
		var cacheImage = document.createElement('img');
		cacheImage.src = arguments[i];
		cache.push(cacheImage);
	}
}
$.preLoadImages("/main/images/carousel2_background.jpg", "/main/images/carousel3_background.jpg");