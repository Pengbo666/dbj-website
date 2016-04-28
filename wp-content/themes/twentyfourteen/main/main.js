$(document).ready(function(){
	$(".dropdown").mouseover(function(){
		$(this).addClass("open")
	})
	$(".dropdown").mouseout(function(){
		$(this).removeClass("open")
	})
      

/*      $('#nav').on('click', function (e) {
            Custombox.open({
               // target: './main/lib/custombox-master/demo/xhr/ajax.html',
                //effect: 'makeway',
                //effect: 'contentscale',
                target:'#nav-modal',
                //effect: 'blur',
                //effect:'rotate',
                effect:'slit',
                speed:1500,
               // width:'30%',
               animation:'right',
               position:'right,top',
                //overlaySpeed:1200,
	            open:function(){
	            	var width = $(window).width()
	            	$("#abcd").show()
	            	$("#abcd").animate({left:"-600"+"px",top:"0px"},10);
	            	$('#nav-modal-real').show(3000)
	            	//alert($('#nav-content').parent().parent().parent().attr("style"))
	            },
	            close:function(){
	            	$("#abcd").hide()
	            	$('#nav-modal-real').fadeOut(300)
	            	//alert("123")
	            }
	        })
            e.preventDefault();
        });*/
//var width = $('#nav-modal-real').width()
//$('#nav-modal-real').animate({left:"+"+width+"px",top:"0px"},1)
//alert(width)
var width = $('#nav-modal-real').width()
$(".modal-demo.modal-ajax").animate({"right":-width+"px"})

$('[name="nav"]').on("click",function(){
	var body_width = $(window).width()
	var width = $('#nav-modal-real').width()
	if(body_width > 10){
		$("#overflow").fadeIn(1000)
	}
	//$("#abcd").animate({left:"-"+width+"px",top:"0px"},10);
	$("#overflow").css("left","-"+width+"px")
	//$("#all").css("left","-"+width+"px")
	$('#nav-modal-real').attr("vshow","true")
	$('#nav-modal-real').show()
	//$('#nav-modal-real').animate({left:"-"+width+"px",top:"0px"},5)
	$(".modal-demo.modal-ajax").animate({"right":"0px"})
})
$("#overflow").on("click",function(){
	$('#nav-modal-real').attr("vshow","false")
	//$('#nav-modal-real').animate(300)
	//$("#abcd").animate({left:0+"px",top:"0px"},10);
	var width = $('#nav-modal-real').width()
	$(".modal-demo.modal-ajax").animate({"right":-width+"px"})
	$('#nav-modal-real').fadeOut()
	$("#overflow").hide()
})

	 $(window).resize(function(){
	 	var body_width = $(window).width()
	 	if(body_width <=1024){
			$(".modal-demo.modal-ajax").css("top",0)
		}
	 	var vshow = $('#nav-modal-real').attr("vshow")
	 	if(body_width > 10 && vshow == 'true'){
	 		var width = $('#nav-modal-real').width()
	 		//width = body_width -width
	 		//alert(width)
	 		$("#overflow").css("left","-"+width+"px")
	 		$("#overflow").show()
	 	}else{
	 		$("#overflow").hide()
	 	}
	 })
$(window).scroll(function() {
	var body_width = $(window).width()
	if(body_width <=1024){
		$(".modal-demo.modal-ajax").css("top",0)
	}else{
	var top = 50 - $(window).scrollTop()
		if(top >= 0){
			//$("#overflow").css("top",top)
			$(".modal-demo.modal-ajax").css("top",top)
		}else{
			$(".modal-demo.modal-ajax").css("top",0)
			//$("#overflow").css("top",0)
		}
	}
 })
/*$(document).mousedown(function(e){
var x1 = e.originalEvent.x || e.originalEvent.layerX || 0; 
//var yy = e.originalEvent.y || e.originalEvent.layerY || 0; 
		//console.log(xx,yy)
	$(document).mouseup(function(e){
	var x2 = e.originalEvent.x || e.originalEvent.layerX || 0; 
		if(x1< x2){
			//console.log('right')
			$('[name="nav"]').click()
		}else{
			$("#overflow").click()
			//console.log("left")
		}
	//var yy = e.originalEvent.y || e.originalEvent.layerY || 0; 
			//console.log(xx,yy)
	})
	e.preventDefault
	//console.log($(this).offset())
})*/

	var player = videojs('really-cool-video', { /* Options */ }, function() {
	  console.log('Good to go!');

	  this.play(); // if you don't trust autoplay for some reason

	  // How about an event listener?
	  this.on('ended', function() {
	    console.log('awww...over so soon?');
	  });
	});
})