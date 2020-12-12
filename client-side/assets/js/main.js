(function($){

	'use strict';

	// Variables

	var window_width = $(window).width();

	/**********************
	*Category Nav Activation
	***********************/ 

	$('#js-cat-nav').slicknav({
		label: '',
		duration: 1000,
		label: 'Category',
		showChildren: 'false',
		prependTo:'.category-moble-menu'
	});
	
	/**********************
	*Mobile Menu Activatin
	***********************/ 

	var mainMenuNav = $('.main-navigation');
	mainMenuNav.meanmenu({
	    meanScreenWidth: '991',
	    meanMenuContainer: '.mobile-menu',
	    meanMenuClose: '<span class="menu-close"></span>',
	    meanMenuOpen: '<span class="menu-bar"></span>',
	    meanRevealPosition: 'right',
	    meanMenuCloseSize: '0',
	});

	/**********************
	*Adding Slide effect to dropdown
	***********************/ 

	function dropdownAnimation(){
		$('.dropdown').on('show.bs.dropdown', function(e){
		  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
		});

		$('.dropdown').on('hide.bs.dropdown', function(e){
		  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
		});		
	}

	/**********************
	*Expand Category Menu
	***********************/ 
	
	function categoryMenuExpand(){
		$(".hidden-in-default").hide();

		$("#js-cat-nav-title").on('click',function(){
			$("#js-cat-nav").slideToggle(500);
		});

		$(".hidden-menu-item").hide();
		$(".js-expand-hidden-menu").on('click',function(e){
			e.preventDefault();
			$(".hidden-menu-item").toggle(500);
			var htmlAfter = "Close Categories";
			var htmlBefore = "More Categories";
			
			$(this).html($(this).text() == htmlAfter ? htmlBefore : htmlAfter);
			$(this).toggleClass("close");
		});		
	}

	/**********************
	*Expand Category Mobile Menu 
	***********************/ 
	
	function categoryMenuExpandInMobile(){
		$('.has-children').on('click', function(e){
			e.preventDefault();
			$(this).find('.category-nav__submenu').slideToggle('500');
		});
	}

	/**********************
	*Cart Dropdown
	***********************/ 
	
	function cartDrpdownExpand(){
		$('#cartDropdown').on('click', function(e){
			e.preventDefault();
			$(this).siblings('.header-cart__dropdown-menu').slideToggle('slow');
		});
		$('#cart-close').on('click', function(e){
			e.preventDefault();
			$('.header-cart__dropdown-menu').slideUp('slow');
		})
	}


	/**********************
	*Magnific Popup Activation
	***********************/ 

	var imagePopup = $('.popup-link');
	imagePopup.magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});


	/**********************
	*Slider Activation
	***********************/


	var homeSlider = $('#homepage-slider');

	homeSlider.owlCarousel({
		items: 1,
		smartSpeed: 1000,
	    loop:true,
	    nav: true,
	    dots: true,
	    autoplay: false,
	    autoplayTimeout: 3000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">']
	});

	homeSlider.on('translate.owl.carousel', function(){
		var animation = $('[data-animation]');
		animation.each(function(){
			var anim_name = $(this).data('animation');
			$(this).removeClass('animated ' + anim_name).css('opacity', '0');
		});
	});

	$('[data-delay]').each(function(){
		var anim_del = $(this).data('delay');
		$(this).css('animation-delay', anim_del);
	});


	$('[data-duration]').each(function(){
		var anim_dur = $(this).data('duration');
		$(this).css('animation-duration', anim_dur);
	});

	homeSlider.on('translated.owl.carousel', function(){
		var layer = homeSlider.find('.owl-item.active').find('[data-animation]');
		layer.each(function(){
			var anim_name = $(this).data('animation');
			$(this).addClass('animated ' + anim_name).css('opacity', '1');
		});
	});


	/**********************
	*Category Carousel Activation
	***********************/

	$('.js-product-category-carousel').owlCarousel({
		items: 5,
		smartSpeed: 1000,
	    loop:true,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000, 
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],       
	    responsive:{
	        0:{
	            items:1,
	        },
	        480:{
	            items:2,
	        },
	        768:{
	            items:3,
	        },
	        992:{
	            items:4,
	        },
	        1200:{
	            items:5,
	        }
    	}
	});

	/**********************
	*Category Carousel 2 Activation
	***********************/

	$('.product-category--2').owlCarousel({
		items: 5,
		smartSpeed: 1000,
	    loop:true,
	    nav: false,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000, 
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],       
	    responsive:{
	        0:{
	            items:1,
	        },
	        480:{
	            items:2,
	        },
	        768:{
	            items:3,
	        },
	        992:{
	            items:4,
	        },
	        1200:{
	            items:5,
	        }
    	}
	});


	/**********************
	*Product Carousel Activation
	***********************/

	$('.js-product-carousel').owlCarousel({
		items: 4,
	    loop:true,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        480:{
	            items:2,
	        },
	        600:{
	            items:2,
	        },
	        992:{
	            items:3,
	        },
	        1200:{
	            items:4,
	        }
    	}
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		var currentID = e.target.getAttribute('href');
		$(currentID).find('.owl-item').trigger('refresh.owl.carousel');
		$(currentID).find('.owl-item').resize();
	});


	/**********************
	*Product Thumb Carousel Activation
	***********************/

	$('#thumbmenu').owlCarousel({
		items: 3,
	    loop:false,
	    nav: true,
	    dots: false,
	    margin: 20,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        300:{
	            items:2,
	        },
	        400:{
	            items:4,
	        },
	        768:{
	            items:2,
	        },
	        992:{
	            items:3,
	        }
    	}
	});


	/**********************
	*Product Thumb Carousel 2 Activation
	***********************/

	$('#thumbmenu2').owlCarousel({
		items: 3,
	    loop:true,
	    nav: true,
	    dots: false,
	    margin: 20,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        300:{
	            items:2,
	        },
	        450:{
	            items:3,
	        },
	        570:{
	            items:4,
	        },
	        768:{
	            items:4,
	        },
	        992:{
	            items:3,
	        }
    	}
	});

	/**********************
	*Product Carousel Activation
	***********************/

	$('.js-featured-product').owlCarousel({
		items: 5,
	    loop:true,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        480:{
	            items:2,
	        },
	        768:{
	            items:3,
	        },
	        992:{
	            items:4,
	        },
	        1200:{
	            items:5,
	        }
    	}
	});


	/**********************
	*Best Seller Product Carousel Activation
	***********************/

	$('.js-best-seller-carousel').owlCarousel({
		items: 2,
	    loop:false,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        768:{
	            items:2,
	        }
    	}
	});

	/**********************
	*Best Seller Product Carousel 2 Activation
	***********************/

	$('.js-best-seller-carousel-2').owlCarousel({
		items: 1,
	    loop:false,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">']
	});

	/**********************
	*Random Product Carousel Activation
	***********************/

	$('.js-random-product').owlCarousel({
		items: 1,
	    loop:false,
	    nav: false,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">']
	});


	/**********************
	*Trending Product Carousel Activation
	***********************/

	$('.js-tanding-product-1').owlCarousel({
		items: 3,
	    loop:false,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        480:{
	            items:2,
	        },
	        600:{
	            items:2,
	        },
	        992:{
	            items:3,
	        }
    	}
	});

	/**********************
	*Trending Product Carousel 2 Activation
	***********************/

	$('#tanding-product-2').owlCarousel({
		items: 3,
		margin: 30,
	    loop:false,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        768:{
	            items:2,
	        },
	        992:{
	            items:3,
	        }
    	}
	});


	/**********************
	*Related Product Carousel 2 Activation
	***********************/

	$('.js-related-product').owlCarousel({
		items: 5,
		margin: 30,
	    loop:false,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        576:{
	            items:2,
	        },
	        768:{
	            items:3,
	        },
	        992:{
	            items:4,
	        },
	        1200:{
	            items:5,
	        }
    	}
	});


	/**********************
	*Blog Carousel Activation
	***********************/

	$('.blog-carousel').owlCarousel({
		items: 3,
	    loop:false,
	    margin: 30,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        576:{
	            items:2,
	        },
	        992:{
	            items:3,
	        }
    	}
	});

	/**********************
	*Client Carousel Activation
	***********************/

	$('.client-carousel').owlCarousel({
		items: 5,
	    loop: true,
	    nav: true,
	    dots: false,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	    responsive:{
	        0:{
	            items:1,
	        },
	        450:{
	            items:2,
	        },
	        600:{
	            items:3,
	        },
	        992:{
	            items:4,
	        },
	        1200:{
	            items:5,
	        }
    	}
	});




	/**********************
	*Testimonial Carousel Activation
	***********************/

	$('.testimonial-carousel').owlCarousel({
		items: 1,
	    loop: true,
	    nav: false,
	    dots: true,
	    autoplay: false,
	    autoplayTimeout: 5000,
	    navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],    
	});


	/**********************
	* Thumb Tab
	***********************/

	$('.modal').on('shown.bs.modal', function (e) {
	    $('.thumb-menu-item').resize();
	})
	    
	$('.thumb-menu-item a').on('click',function(e){
	      e.preventDefault();
	     
	      var $href = $(this).attr('href');
	     
	      $('.thumb-menu-item a').removeClass('active');
	      $(this).addClass('active');
	     
	      $('.product-thumb-large .tab-pane').removeClass('active show');
	      $('.product-thumb-large '+ $href ).addClass('active show');
	     
	});

	/**********************
	* Product Quantity
	***********************/

	function customQantity(){
	    $(".quantity").append('<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>');

	    $(".qtybutton").on("click", function () {
	        var $button = $(this);
	        var oldValue = $button.parent().find("input").val();
	        if ($button.hasClass("inc")) {
	            var newVal = parseFloat(oldValue) + 1;
	        } else {
	            // Don't allow decrementing below zero
	            if (oldValue > 1) {
	                var newVal = parseFloat(oldValue) - 1;
	            } else {
	                newVal = 1;
	            }
	        }
	        $button.parent().find("input").val(newVal);
	    });		
	}


	/**********************
	* Scroll To Top
	***********************/

    function scrollToTop(){
		var scrollTop = $(".scroll-to-top");
		$(window).on('scroll', function() {
			var topPos = $(this).scrollTop();

			if (topPos > 100) {
				$(scrollTop).css("opacity", "1");

			} else {
				$(scrollTop).css("opacity", "0");
			}

		}); 

		$(scrollTop).on('click', function() {
			$('html, body').animate({
				scrollTop: 0
			}, 800);
			return false;

		}); 

    }

	/**********************
	* Countdown Activation
	***********************/
	
	$('[data-countdown]').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
			$this.html(event.strftime('<div class="single-countdown"><span class="single-countdown__time">%D</span><span class="single-countdown__text">Days</span></div><div class="single-countdown"><span class="single-countdown__time">%H</span><span class="single-countdown__text">Hours</span></div><div class="single-countdown"><span class="single-countdown__time">%M</span><span class="single-countdown__text">Minutes</span></div><div class="single-countdown"><span class="single-countdown__time">%S</span><span class="single-countdown__text">Seconds</span></div>'));
		});
	}); 

	/**********************
	* Nice Select Activation
	***********************/
	$('.short-select').niceSelect();
	$('.country_select').niceSelect();

	/**********************
	* Sticky Header
	***********************/

	function stickyHeader(){
		$(window).on('scroll', function(){
		    if ($(window).scrollTop() >= 200) {
		        $('.fixed-header').addClass('sticky-header');
		    }
		    else {
		        $('.fixed-header').removeClass('sticky-header');
		    }
		});		
	}

	/**********************
	* Password Show Hide button
	***********************/
	
	function showPassword(){
		$(".pass-show-btn").on('click', function(){
			var attrType = $(this).siblings().attr('type');
			var value = $(this).siblings().val();
			if(value != ''){
				if(attrType == 'password'){
					$(this).siblings().attr('type', 'text');
					$(this).text('Hide');
				}else{
					$(this).siblings().attr('type', 'password');
					$(this).text('Show');
				}
			}
		});
	}

	/**********************
	* Expand User Activation
	***********************/

	function expandAction(){
		$(".expand_action").on('click', function(){
			var target = $(this).data('attr');
			$(target).slideToggle('slow');
		});
	}
   
	/**********************
	* Expand new account info
	***********************/

	function expandNewAccountInfo(){
		$("#createaccount").on('change', function(){
			if(  $("#createaccount").prop( "checked" ) ){
				$(".new-account").slideToggle('slow');
			}else{
				$(".new-account").slideToggle('slow');
			}
		})
	}


	/**********************
	*Expand new shipping info  
	***********************/

	function expandShippingInfo(){
		$("#shipdifferetads").on('change', function(){
			if(  $("#shipdifferetads").prop( "checked" ) ){
				$(".ship-box-info").slideToggle('slow');
			}else{
				$(".ship-box-info").slideToggle('slow');
			}
		})
	}


	/**********************
	*Expand Sidebar Category Menu 
	***********************/

	function expandSidebarMenu(){
		$(".expand-navbar").on('click', function(){
			var target = $(this).data('target');
			$(this).toggleClass('open');
			$(target).slideToggle('slow');
		});
	}

	/**********************
	*Initialization 
	***********************/
	
	$(window).on({
	    load:function(){
	    	var window_width = $(window).width();
	     	if(window_width < 992){
	     		categoryMenuExpandInMobile();
	     	}
	    },
	    resize:function(){
	    	var window_width = $(window).width();
	     	if(window_width < 992){
	     		categoryMenuExpandInMobile();
	     	}
	    }
	});
	$(window).on({
	    load:function(){
	    	var window_width = $(window).width();
	     	if(window_width > 991){
	     		stickyHeader();
	     	}
	    },
	    resize:function(){
	    	var window_width = $(window).width();
	     	if(window_width > 991){
	     		stickyHeader();
	     	}
	    }
	});
	
	dropdownAnimation();
	categoryMenuExpand();
	cartDrpdownExpand();
	customQantity();
	showPassword();
	expandAction();
	expandNewAccountInfo();
	expandShippingInfo();
	expandSidebarMenu();
	scrollToTop();

})(jQuery);

