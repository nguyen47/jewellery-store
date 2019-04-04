(function($){
"use strict"; // Start of use strict
$(function() {
	//Custom Slider
	if($('.product-custom-slider').length>0){
		$('.product-custom-slider').each(function(){
			var self = $(this);
			var next = self.find('.next');
			var prev = self.find('.prev');
			var list = self.find('.list-product');
			var item = self.find('.item-product');
			var current = self.find('.item-current').index()+1;
			var src_thumb = self.find('.item-current .product-thumb img').attr('src');
			var iwd = item.width();
			var lwd = list.width();
			var total = item.length;
			var current_text,total_text;
			if(total>9){
				total_text = total;
			}else{
				total_text = '0' + total
			}
			if(current>9){
				current_text = current;
			}else{
				current_text = '0' + current
			}
			self.find('.current').text(current_text);
			self.find('.total').text(total_text);
			self.find( ".custom-range-max" ).slider({
				range: "max",
				min: current,
				max: total,
				value: current,
				slide: function( event, ui ) {
					current = ui.value;
					if(current>9){
						current_text = current;
					}else{
						current_text = '0' + current
					}
					self.find('.current').text(current_text);
					item.removeClass('item-current');
					item.eq(current-1).addClass('item-current');
					list.css('transform','translateX(-'+(current-1)*iwd+'px)');
					src_thumb = self.find('.item-current .product-thumb img').attr('src');
					self.parents('.content-scroll-box').find('.custom-product-thumb').attr('src',src_thumb);
				}
			});
			next.on('click',function(event){
				event.preventDefault();
				current = current + 1;	
				if(current>total){
					current = 1;
				}
				if(current>9){
					current_text = current;
				}else{
					current_text = '0' + current
				}
				self.find('.current').text(current_text);
				item.removeClass('item-current');
				item.eq(current-1).addClass('item-current');
				list.css('transform','translateX(-'+(current-1)*iwd+'px)');
				src_thumb = self.find('.item-current .product-thumb img').attr('src');
				self.parents('.content-scroll-box').find('.custom-product-thumb').attr('src',src_thumb);
				self.find( ".custom-range-max" ).slider({
					range: "max",
					max: total,
					value: current,
				});
			});
			prev.on('click',function(event){
				event.preventDefault();
				current = current - 1;	
				if(current < 1){
					current = total;
				}
				if(current>9){
					current_text = current;
				}else{
					current_text = '0'+ current
				}
				self.find('.current').text(current_text);
				item.removeClass('item-current');
				item.eq(current-1).addClass('item-current');
				list.css('transform','translateX(-'+(current-1)*iwd+'px)');
				src_thumb = self.find('.item-current .product-thumb img').attr('src');
				self.parents('.content-scroll-box').find('.custom-product-thumb').attr('src',src_thumb);
				self.find( ".custom-range-max" ).slider({
					range: "max",
					max: total,
					value: current,
				});
			});
		});
	}
	//Product Inner Zoom
	if($('.inner-zoom').length>0){
		$('.inner-zoom').on('mouseover',function(){
			$(this).find('img').elevateZoom({
				zoomType: "lens",
				lensShape: "square",
				lensSize: 100,
				borderSize:1,
				containLensZoom:true,
				responsive:true
			});
		})
	}
	//Check RTL
	if($('body').attr('dir')=="rtl"){
		$('body').addClass("right-to-left");
	}else{
		$('body').removeClass("right-to-left");
	}
	//Mini Cart Fixed
	$('body').on('click',function(event){
		$(this).removeClass('overlay');
		$('.mini-cart-box.aside-box .mini-cart-content').removeClass('active');
		$('.nav-fixed .main-nav').removeClass('active');
	});
	$('.mini-cart-box.aside-box,.nav-fixed').on('click',function(){
		event.stopPropagation();
	});
	$('.mini-cart-box.aside-box .mini-cart-link,.nav-fixed .btn-nav-fixed').on('click',function(event){
		event.preventDefault();
		$('body').addClass('overlay');
		$(this).next().addClass('active');
	});
	//Attr Color
	$('.list-attr-color a').on('click',function(event){
		event.preventDefault();
		var self = $(this);
		var image = self.attr('data-image');
		self.parents('.product-thumb').find('.product-thumb-link img').attr('src',image);
	});
	//Full Mega Menu
	if($('.full-mega-menu').length>0){
		$('.main-nav').each(function(){
			if($('body').attr('dir')=="rtl"){
				var nav_os = ($(window).width() - ($(this).offset().left + $(this).outerWidth()));
				var par_os = ($(window).width() - ($(this).parents('.container,.container-fluid').offset().left + $(this).parents('.container,.container-fluid').outerWidth()));
				var nav_right = nav_os - par_os - 15;
				$(this).find('.full-mega-menu').css('margin-right','-' + nav_right + 'px');
			}else{
				var nav_os = $(this).offset().left;
				var par_os = $(this).parents('.container,.container-fluid').offset().left;
				var nav_left = nav_os - par_os - 15;
				$(this).find('.full-mega-menu').css('margin-left','-' + nav_left + 'px');
			}
		});
	}
	//Qty Up-Down
	$('.detail-qty').each(function(){
		$(this).find('.qty-up').on('click',function(event){
			event.preventDefault();
			var qtyval = parseInt($(this).parent().find('.qty-val').text(),10);
			qtyval=qtyval+1;
			$(this).parent().find('.qty-val').text(qtyval);
		});
		$(this).find('.qty-down').on('click',function(event){
			event.preventDefault();
			var qtyval = parseInt($(this).parent().find('.qty-val').text(),10);
			qtyval=qtyval-1;
			if(qtyval>1){
				$(this).parent().find('.qty-val').text(qtyval);
			}else{
				qtyval=1;
				$(this).parent().find('.qty-val').text(qtyval);
			}
		});
	});
	//Filter Price
	if($('.range-filter').length>0){
		$('.range-filter').each(function(){
			$(this).find( ".slider-range" ).slider({
				range: true,
				min: 0,
				max: 500,
				values: [ 25, 400 ],
				slide: function( event, ui ) {
					$(this).find( ".min-price" ).text( '$' + ui.values[ 0 ]);
					$(this).find( ".max-price" ).text( '$' + ui.values[ 1 ]);
				}
			});
			$(this).find( ".min-price" ).appendTo($(this).find('.ui-slider-handle').first()).text( '$' + $(this).find( ".slider-range" ).slider( "values", 0 ));
			$(this).find( ".max-price" ).appendTo($(this).find('.ui-slider-handle').last()).text( '$' + $(this).find( ".slider-range" ).slider( "values", 1 ));
		});
	}
	//Toggle Class
	if($('.list-attr').length>0){
		$('.list-attr a').on('click',function(event){
			event.preventDefault();
			$(this).toggleClass('active');
		});
	}
	//Tag Toggle
	if($('.toggle-tab').length>0){
		$('.toggle-tab').each(function(){
			$(this).find('.item-toggle-tab.active .toggle-tab-content').show();
			$(this).find('.toggle-tab-title').on('click',function(event){
				if($(this).next().length>0){
					event.preventDefault();
					$(this).parent().siblings().removeClass('active');
					$(this).parent().toggleClass('active');
					$(this).parents('.toggle-tab').find('.toggle-tab-content').slideUp();
					$(this).next().stop(true,false).slideToggle();
				}
				
			});
		});
	}
	//Hover Active
	if($('.box-hover-active').length>0){
		$('.box-hover-active').each(function(){
			$(this).find('.item-hover-active').on('mouseover',function(){
				$(this).parents('.box-hover-active').find('.item-hover-active').removeClass('active');
				$(this).addClass('active');
			});
			$(this).on('mouseout',function(){
				$(this).find('.item-hover-active').removeClass('active');
				$(this).find('.item-active').addClass('active');
			});
		});
	}
	//Popup Wishlist
	$('.wishlist-link').on('click',function(event){
		event.preventDefault();
		$('.wishlist-mask').fadeIn();
		var counter = 5;
		var popup;
		popup = setInterval(function() {
			counter--;
			if(counter < 0) {
				clearInterval(popup);
				$('.wishlist-mask').hide();
			} else {
				$(".wishlist-countdown").text(counter.toString());
			}
		}, 1000);
	});
	//Menu Responsive
	$('.toggle-mobile-menu').on('click',function(event){
		event.preventDefault();
		$(this).parents('.main-nav').toggleClass('active');
	});
	//Custom ScrollBar
	if($('.custom-scroll').length>0){
		$('.custom-scroll').each(function(){
			$(this).mCustomScrollbar({
				advanced:{
					autoScrollOnFocus: false,
				}  
			});
		});
	}
	//Horizontal Custom ScrollBar
	if($('.hoz-custom-scroll').length>0){
		$('.hoz-custom-scroll').each(function(){
			$(this).mCustomScrollbar({
				horizontalScroll:true,
			});
		});
	}
	//Animate
	if($('.wow').length>0){
		new WOW().init();
	}
	//Light Box
	if($('.fancybox').length>0){
		$('.fancybox').fancybox();	
	}
	if($('.quickview-link').length>0){
		$('.quickview-link').fancybox({
			afterLoad: function () {
				detail_gallery();
			}
		});	
	}
	if($('.fancybox-media').length>0){
		$('.fancybox-media').attr('rel', 'media-gallery').fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',
			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
		});
	}
	//Back To Top
	$('.scroll-top').on('click',function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	//Box Hover Dir
	$('.box-hover-dir').each( function() {
		$(this).hoverdir(); 
	});
	//Background Image
	if($('.banner-background').length>0){
		$('.banner-background').each(function(){
			var b_url = $(this).attr("data-image");
			$(this).css('background-image','url("'+b_url+'")');	
		});
	}
	//Box Parallax	
	if($('.parallax').length>0){
		$('.parallax').each(function(){
			var p_url = $(this).attr("data-image");
			$(this).css('background-image','url("'+p_url+'")');	
		});
	}
	//Switch Register
	$('.login-to-register').on('click',function(event){
		event.preventDefault();
		$(this).toggleClass('login-status');
		if($(this).hasClass('login-status')){
			$(this).text($(this).attr('data-login'));
			$(this).parents('.register-content-box').find('.block-login').hide();
			$(this).parents('.register-content-box').find('.block-register').show();
		}else{
			$(this).text($(this).attr('data-register'));
			$(this).parents('.register-content-box').find('.block-login').show();
			$(this).parents('.register-content-box').find('.block-register').hide();
		}
	});
	//Box Filter Product	
	if($('.box-product-filter').length>0){
		$('.box-product-filter').each(function(){
			var self = $(this);
			self.find('.btn-filter-product').on('click',function(event){
				event.preventDefault();
				$(this).next().slideToggle();
			});
		});
	}
});
//Offset Menu
function offset_menu(){
	if($(window).width()>767){
		$('.main-nav .sub-menu').each(function(){
			var wdm = $(window).width();
			var wde = $(this).width();
			var offset = $(this).offset().left;
			var tw = offset+wde;
			if(tw>wdm){
				$(this).addClass('offset-right');
			}
		});
	}else{
		return false;
	}
}
//Fixed Header
function fixed_header(){
	if($('.header-ontop').length>0){
		if($(window).width()>1023){
			var ht = $('#header').height();
			var st = $(window).scrollTop();
			if(st>ht){
				$('.header-ontop').addClass('fixed-ontop');
			}else{
				$('.header-ontop').removeClass('fixed-ontop');
			}
		}else{
			$('.header-ontop').removeClass('fixed-ontop');
		}
	}
} 
//Slider Background
function background(){
	$('.bg-slider .item-slider').each(function(){
		var src=$(this).find('.banner-thumb a img').attr('src');
		$(this).css('background-image','url("'+src+'")');
	});	
}
//After Action
function afterAction(){
	$('.banner-slider .owl-item').each(function(){
		var check = $(this).hasClass('active');
		if(check==true){
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).addClass(anime);
			});
		}else{
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).removeClass(anime);
			});
		}
	});
	
	var owl = this;
	var visible = this.owl.visibleItems;
	var first_item = visible[0];
	var last_item = visible[visible.length-1];
	this.$elem.find('.owl-item').removeClass('first-item');
	this.$elem.find('.owl-item').removeClass('last-item');
	this.$elem.find('.owl-item').eq(first_item).addClass('first-item');
	this.$elem.find('.owl-item').eq(last_item).addClass('last-item');
}
function slick_animated(){
	$('.banner-slick .item-slider').each(function(){
		var check = $(this).hasClass('slick-active');
		if(check==true){
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).addClass(anime);
			});
		}else{
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).removeClass(anime);
			});
		}
	});
}
//Detail Gallery
function detail_gallery(){
	if($('.detail-gallery').length>0){
		$('.detail-gallery').each(function(){
			var data=$(this).find(".carousel").data();
			$(this).find(".carousel").jCarouselLite({
				btnNext: $(this).find(".gallery-control .next"),
				btnPrev: $(this).find(".gallery-control .prev"),
				speed: 800,
				visible:data.visible,
				vertical:data.vertical,
			});
			//Elevate Zoom
			$(this).find('.mid img').elevateZoom({
				zoomType: "lens",
				lensShape: "square",
				lensSize: 100,
				borderSize:1,
				containLensZoom:true
			});
			$(this).find(".carousel a").on('click',function(event) {
				event.preventDefault();
				$(this).parents('.detail-gallery').find(".carousel a").removeClass('active');
				$(this).addClass('active');
				var z_url =  $(this).find('img').attr("src");
				$(this).parents('.detail-gallery').find(".mid img").attr("src", z_url);
				$('.zoomLens').css('background-image','url("'+z_url+'")');
			});
		});
	}
}
//Menu Responsive
function menu_responsive(){
	if($(window).width()<768){
		if($('.btn-toggle-mobile-menu').length>0){
			return false;
		}else{
			$('.main-nav li.menu-item-has-children,.main-nav li.has-mega-menu').append('<span class="btn-toggle-mobile-menu"></span>');
			$('.main-nav .btn-toggle-mobile-menu').on('click',function(event){
				$(this).toggleClass('active');
				$(this).prev().stop(true,false).slideToggle();
			});
		}
	}else{
		$('.btn-toggle-mobile-menu').remove();
		$('.main-nav .sub-menu,.main-nav .mega-menu').slideDown();
	}
}
//Document Ready
jQuery(document).ready(function(){
	//Menu Responsive
	menu_responsive();
	//Detail Gallery
	detail_gallery();
	//Offset Menu
	offset_menu();
	//Video Parallax
	if($('.block-video-parallax').length > 0){
		// video controls
		$('.video-button').on('click', function (event) {
			event.preventDefault();
			var video = $('.video-parallax').get(0);
			$(this).toggleClass('active');
			if (video.paused) {
				video.play();
			} else {
				video.pause();
			}
		});
	}
});
//Window Load
jQuery(window).on('load',function(){ 
	//Pre Load
	$('body').removeClass('preload'); 
	//Owl Carousel
	if($('.wrap-item').length>0){
		$('.wrap-item').each(function(){
			var data = $(this).data();
			$(this).owlCarousel({
				addClassActive:true,
				stopOnHover:true,
				lazyLoad:true,
				itemsCustom:data.itemscustom,
				autoPlay:data.autoplay,
				transitionStyle:data.transition, 
				paginationNumbers:data.paginumber,
				beforeInit:background,
				afterAction:afterAction,
				navigationText:['<i class="icon ion-ios-arrow-thin-left"></i>','<i class="icon ion-ios-arrow-thin-right"></i>'],
			});
		});
	}
	//Trigger Slider
	$('.control-slider .prev').on('click', function(e){
		e.preventDefault();
		$('.control-slider .wrap-item').trigger('owl.prev');
	});
	$('.control-slider .next').on('click', function(e){
		e.preventDefault();
		$('.control-slider .wrap-item').trigger('owl.next');
	});
	
	//Slick Slider
	if($('.banner-slick .slick').length>0){
		$('.banner-slick .slick').each(function(){
			slick_animated();
			$(this).slick({
				centerMode: true,
				centerPadding: '60px',
				slidesToShow: 1,
				autoplay:true,
				prevArrow:'<span class="slick-prev"><i class="icon ion-android-arrow-back"></i></span>',
				nextArrow:'<span class="slick-next"><i class="icon ion-android-arrow-forward"></i></span>',
				responsive: [
					{
					  breakpoint: 767,
					  settings: {
						centerPadding: '0px',
					  }
					}
				  ]
			});
			$('.slick').on('afterChange', function(event){
				slick_animated();
			});
		});
	}
	//Bx Slider
	if($('.bx-slider').length>0){
		$('.bx-slider').each(function(){
			$(this).find('.bxslider').bxSlider({
				prevText:'<i class="icon ion-android-arrow-back"></i>',
				nextText:'<i class="icon ion-android-arrow-forward"></i>',
				pagerCustom: $(this).find('.bx-pager'),
			});
		});
	}
	//Time Countdown
	if($('.time-countdown').length>0){
		$(".time-countdown").each(function(){
			var data = $(this).data(); 
			$(this).TimeCircles({
				fg_width: data.width,
				bg_width: 0,
				text_size: 0,
				circle_bg_color: data.bg,
				time: {
					Days: {
						show: data.day,
						text: data.text[0],
						color: data.color,
					},
					Hours: {
						show: data.hou,
						text: data.text[1],
						color: data.color,
					},
					Minutes: {
						show: data.min,
						text: data.text[2],
						color: data.color,
					},
					Seconds: {
						show: data.sec,
						text: data.text[3],
						color: data.color,
					}
				}
			}); 
		});
	}
	//Count Down Master
	if($('.countdown-master').length>0){
		$('.countdown-master').each(function(){
			$(this).FlipClock(65100,{
		        clockFace: 'HourlyCounter',
		        countdown: true,
		        autoStart: true,
		    });
		});
	}
	//List Item Masonry 
	if($('.list-item-masonry').length>0){
		$('.list-item-masonry').masonry({
			itemSelector: '.item-masonry',
		});
	}
	//Percentage
	$('.percentage').each(function(){
		var data = $(this).data();
		// console.log(data);
		$(this).circularloader({
			backgroundColor: "#ffffff",//background colour of inner circle
			fontColor: "#000000",//font color of progress text
			fontSize: "40px",//font size of progress text
			radius: 90,//radius of circle
			progressBarBackground: "#e9e9e9",//background colour of circular progress Bar
			progressBarColor: data.color,//colour of circular progress bar
			progressBarWidth: 10,//progress bar width
			progressPercent: data.value,//progress percentage out of 100
			progressValue:0,//diplay this value instead of percentage
			showText: false,//show progress text or not
			title: "",//show header title for the progress bar
		});
	});
});
//Window Resize
jQuery(window).on('resize',function(){
	offset_menu();
	fixed_header();
	menu_responsive();
});
//Window Scroll
jQuery(window).on('scroll',function(){
	//Scroll Top
	if($(this).scrollTop()>$(this).height()){
		$('.scroll-top').addClass('active');
	}else{
		$('.scroll-top').removeClass('active');
	}
	//Fixed Header
	fixed_header();
	//Parallax Slider
	if($('.parallax-slider').length>0){
		var ot = $('.parallax-slider').offset().top;
		var sh = $('.parallax-slider').height();
		var st = $(window).scrollTop();
		var top = (($(window).scrollTop() - ot) * 0.5) + 'px';
		if(st>ot&&st<ot+sh){
			$('.parallax-slider .item-slider').css({
				'background-position': 'center ' + top
			});
		}else{
			$('.parallax-slider .item-slider').css({
				'background-position': 'center 0'
			});
		}
	}
	//Video Parallax
	if($('.block-video-parallax').length > 0){
		var ot = $('.block-video-parallax').offset().top;
		var sh = $('.block-video-parallax').height();
		var st = $(window).scrollTop();
		var top = (($(window).scrollTop() - ot) * 0.5) + 'px';
		if(st>ot&&st<ot+sh){
			$('.block-video-parallax .video-parallax').css({
				'margin-top': top
			});
		}else{
			$('.block-video-parallax .video-parallax').css({
				'margin-top': 0
			});
		}
	}
});
})(jQuery); // End of use strict