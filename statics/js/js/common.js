$(document).ready(function(){
//右侧悬浮窗口
	$(".float-box").hover(function() {
		$(".float-box").css("right", "5px");
		$(".float-menu .float-code").css('height', '200px');
	}, function() {
		$(".float-box").css("right", "-127px");
		$(".float-menu .float-code").css('height', '53px');
	});
//返回顶部按钮
	$(".float-top").click(function() {
		$("html,body").animate({
			'scrollTop': '0px'
		},{
			duration:800,
			easing:"swing"
		});
		return false;
	});
		
//图片渐隐

	$(".product figure figcaption .img-bg").hide();
	$(".product figure figcaption .big-btn").hide();
	
	$(".product .recommend-box").hover(function(){
		$(this).find(".show-arrow").fadeTo(500,1);
	},function(){
		$(this).find(".show-arrow").fadeTo(500,0);
	});
	$(".product figure figcaption").hover(function(){
		$(this).find(".img-bg").stop().fadeTo(500,0.9);
		$(this).find(".big-btn").stop().fadeTo(500,0.9);
	},function(){
		$(this).find(".img-bg").stop().fadeTo(500,0);
		$(this).find(".big-btn").stop().fadeTo(500,0);
	});
	
	
	//新闻点击翻页
	$('.news-header .news-btn li .prev-btn').click(function(){
		$('.news-header .news-btn li a').css('background-position-y','-25px');
		$('.news-bottom .content-box').css('top','-340px');
	})
	$('.news-header .news-btn li .next-btn').click(function(){
		$('.news-header .news-btn li a').css('background-position-y','0');
		$('.news-bottom .content-box').css('top','0px');
	});
	
			    
//关闭按钮
	$('#close-btn').click(function(){
		if($('.alert-box').css('display')=='block'){
			$('.alert-box').css('display','none')
		}else{
			$('.alert-box').css('display','block')
		}
	});
	
//new recommend
	$('#hot .row .img-mask').hide();
	$('#hot .row .col-sm-3').hover(function(){
		$(this).find(".img-mask").show();
	},function(){
		$(this).find(".img-mask").hide();
	})
	
//cate加载
	var hCatecontent = $('.cate-box').outerHeight() + 'px';
    console.log(hCatecontent);
	$('.icon-shizi').click(function(){
		if($('.cate-content').css('height')=='630px'){
			$('.cate-content').css('height',hCatecontent)
		}else{
			$('.cate-content').css('height','630px')
		}
	});
	
	
})



		


		
	
	
	
	
