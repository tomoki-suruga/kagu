
$(function(){
/***ナビ****/
	$(".menu-3").hover(function(){
		$("#menu,.cory").stop().animate({"right":"0"},100,function(){
			$("#buttom").hide();
		});
	},
	function(){
		$("#menu,.cory").stop().animate({"right":"-230px"},100,function(){
			$("#buttom").show();
	});
	});


/***アイコン****/
	$(".img-photo ul li a,#warks-product,.next a").hover(function(){

			$(this).find("i").stop().css("color","#f00").css("border","#f00 1px solid").animate({
				"padding":"+=5"
				"bottom":"-=5px"
				"right":"-=5px"
			},1,function(){$(this).animate({
					"padding":"-=5"
					"bottom":"+=5px"
					"right":"+=5px"},500,
					function(){
						$(this).css("color","").css("border","");
					});
			});
		},function(){$(this).find("i").css("color","").css("border","").css("padding","")});


/***ナビ-2 タブ****/
	var activeClass = $(".navi .active a").attr("href");

	$("#warks-product p i").hide();

	$("#warks-product").click(function(){
		$(".img-photo ul li").fadeIn(1500);
		$("#warks-product p i").hide();
	});
	$(".navi a").click(function(){
		if($("#warks-product p i").css("display")=="none"){$("#warks-product p i").show();}
		$(".navi ul li.active").removeClass("active");
		$(".img-photo ul li").hide();
		$(this).parent("li").addClass("active");
		$($(this).attr("href")).fadeIn(1500);
		return false;

	});

	$("#Chair-a").click(function(){
		window.location.href =("product-all.html"),function(){
			$("#Chair-b").addClass("active");};

	});

/*$('.btn').on('click', function(){
setTimeout(function(){
    window.location.href = href_val;
}, 500);*/
	});
