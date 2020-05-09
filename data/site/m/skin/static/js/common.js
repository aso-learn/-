$(function() {
	//
	if($("#slider").length>0){
		var w = parseInt($(window).width());
	}
	//top
	$(window).scroll(function(){
		if($(window).scrollTop()>100){
			$('#goTop').fadeIn();
		} else {
			$('#goTop').fadeOut();
		}
	});
	$("#goTop").click(function() {
		$("body,html").animate({scrollTop: 0}, 300);
	});
	//tab切换
	$('.swiper-container').each(function() {
		var _this = $(this);
		var tabsSwiper = new Swiper(this, {
			speed: 500,
			onSlideChangeStart: function() {
				_this.parent().find(".tabs .active").removeClass('active');
				_this.parent().find(".tabs a").eq(tabsSwiper.activeIndex).addClass('active');
			}
		});
		_this.parent().find(".tabs a").on('touchstart mousedown', function(e) {
			e.preventDefault()
			_this.parent().find(".tabs .active").removeClass('active');
			$(this).addClass('active');
			tabsSwiper.swipeTo($(this).index());
		});
		_this.parent().find(".tabs a").click(function(e) {
			e.preventDefault();
		});
	})
	//内容展开收缩
	if($("#app-content").length>0){
		showToggle("#app-content",500,300);
	}
	//TAG
	if($(".tagShow").length>0){
		var tags_a = $(".tagShow li a");
		tags_a.each(function() {
			var x = 8;
			var y = 1;
			var rand = parseInt(Math.random() * (x - y + 1) + y);
			$(this).addClass("c" + rand);
		});	
	}
	//referrer
	var referrer = document.referrer;
	if($("#back a").length>0 && referrer.length == 0){
		$("#back a").attr("href","/");
		$("#back a").attr("title","返回首页");	
	}
	//menu
	$("#sideMenu").click(function() {
		if($("#subTop").is(":hidden")){
			//$('html,body').addClass("ovfHiden");
		} else {
			//$('html,body').removeClass("ovfHiden");
		}
		$("#subTop").slideToggle(200);
	});
	$("body").click(function(e){
		if($("#subTop").is(":visible") && $(e.target).closest(".headerTop").length == 0){
			if($(e.target).closest("#subTop").length == 0){
				$("#subTop").fadeOut("fast");
				$('html,body').removeClass("ovfHiden");
			}
		}
	});
	//fancybox
	if($("article.article img").length>0){
		$('article.article').find('img').each(function () {
			var _this = $(this);
			var _src = _this.attr("src");
			var _alt = _this.attr("alt");
			_this.wrap('<a data-fancybox="images" href="'+_src+'" data-caption="'+_alt+'" title="'+_alt+'"></a>');
		});
	}
	
});
//介绍展开收起 id内容容器ID，minHeight最小高度，time展开收起时间
function showToggle(id,minHeight,time) {
	var minHeight = arguments[1] ? arguments[1] : 500;
	var time = arguments[2] ? arguments[2] : 300;
	var conHeight = $(id).outerHeight(true);
	if (conHeight >= minHeight) {
		$(id).height(minHeight);
		$(".show-toggle .spread").click(function() {
			$(id).animate({"height": conHeight + 60}, time);
			$(this).hide().siblings().show(time);
		});
		$(".show-toggle .shrink").click(function() {
			$(id).animate({"height": minHeight}, time);
			$(this).hide().siblings().show(time);
			$("body,html").animate({scrollTop: $(id).offset().top}, 300);
		});
	} else {
		$(".show-toggle").hide();
	}
}
//百度自动推送
