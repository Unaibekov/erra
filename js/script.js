// $(function() {
//     var Accordion = function(el, multiple) {
//       this.el = el || {};
//       // more then one submenu open?
//       this.multiple = multiple || false;
      
//       var dropdownlink = this.el.find('.dropdownlink');
//       dropdownlink.on('click',
//                       { el: this.el, multiple: this.multiple },
//                       this.dropdown);
//     };
    
//     Accordion.prototype.dropdown = function(e) {
//       var $el = e.data.el,
//           $this = $(this),
//           //this is the ul.submenuItems
//           $next = $this.next();
      
//       $next.slideToggle();
//       $this.parent().toggleClass('open');
      
//       if(!e.data.multiple) {
//         //show only one menu at the same time
//         $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
//       }
//     }
    
//     var accordion = new Accordion($('.accordion-menu'), false);



//     $('.js-click-modal').click(function(){
//       $('.container-auth').addClass('modal-main-open');
//     });
    
//     $('.js-close-modal').click(function(){
//       $('.container-auth').removeClass('modal-main-open');
// 		});
		

		




//     $(".modal").each( function(){
//       $(this).wrap('<div class="overlay"></div>')
//     });
    
//     $(".open-modal").on('click', function(e){
//       e.preventDefault();
//       e.stopImmediatePropagation;
      
//       var $this = $(this),
//           modal = $($this).data("modal");
      
//       $(modal).parents(".overlay").addClass("open");
//       setTimeout( function(){
//         $(modal).addClass("open");
//       }, 350);
      
//       $(document).on('click', function(e){
//         var target = $(e.target);
        
//         if ($(target).hasClass("overlay")){
//           $(target).find(".modal").each( function(){
//             $(this).removeClass("open");
//           });
//           setTimeout( function(){
//             $(target).removeClass("open");
//           }, 350);
//         }
        
//       });
      
//     });
    
//     $(".close-modal").on('click', function(e){
//       e.preventDefault();
//       e.stopImmediatePropagation;
      
//       var $this = $(this),
//           modal = $($this).data("modal");
      
//       $(modal).removeClass("open");
//       setTimeout( function(){	
//         $(modal).parents(".overlay").removeClass("open");
//       }, 50);
      
//     });	

//     var $svg = $('svg').drawsvg();

//     $svg.drawsvg('animate');


//     var elements = $('.modal-overlay, .modal');

//     $('button').click(function(){
//         elements.addClass('active');
//     });

//     $('.close-modal').click(function(){
//         elements.removeClass('active');
//     });


//     $("#carousel-example-generic .carousel-indicators li").hover(function(){
//       var goto = Number( $(this).attr('data-slide-to') );
//       $("#carousel-example-generic").carousel(goto);  
// 		});
		


		




//     function setHeader()
//     {
//       var header = $('.fixed_header');

//       if($(window).scrollTop() > 180)
//       {
//         header.addClass('scrolled');
//       }
//       else
//       {
//         header.removeClass('scrolled');
//       }
//     }

    
//   })


// 	$("#Glide").glide({
// 		type: "carousel",
// 		autoplay: "5000"
// 	});


  
// $(document).ready(function()
// {
// 	"use strict";

// 	/* 

// 	1. Vars and Inits

// 	*/

// 	setHeader();

// 	$(window).on('resize', function()
// 	{
// 		setHeader();

// 		setTimeout(function()
// 		{
// 			$(window).trigger('resize.px.parallax');
// 		}, 375);
// 	});

// 	$(document).on('scroll', function()
// 	{
// 		setHeader();
// 	});

// 	initMenu();

// 	/* 

// 	2. Set Header

// 	*/

// 	function setHeader()
// 	{
// 		var header = $('.fixed_header');

// 		if($(window).scrollTop() > 180)
// 		{
// 			header.addClass('scrolled');
// 		}
// 		else
// 		{
// 			header.removeClass('scrolled');
// 		}
// 	}

// 	/* 

// 	3. Init Menu

// 	*/

// 	function initMenu()
// 	{
// 		if($('.menu').length && $('.hamburger').length)
// 		{
// 			var menu = $('.menu');
// 			var hamburger = $('.hamburger');
// 			var close = $('.menu_close');
// 			var door = $('.menu_door');
// 			var menuContent = $('.menu_content');
// 			var items = $('.menu_nav ul li');

// 			hamburger.on('click', function()
// 			{
// 				// menu.toggleClass('active');

// 				// Open menu
// 				TweenMax.to(menu, 0,
// 				{
// 					visibility:'visible',
// 					opacity:1
// 				});
// 				TweenMax.to(door, 1,
// 				{
// 					width:'50%',
// 					ease: Power3.easeOut
// 				});
// 				TweenMax.to(menuContent, 0.4,
// 				{
// 					opacity:1,
// 					delay:0.4
// 				});
// 				TweenMax.staggerFromTo(items,1,
// 				{
// 					y:10,
// 					opacity:0,
// 					ease:Power2.easeInOut
// 				},
// 				{
// 					y:0,
// 					opacity:1,
// 					delay:0.2
// 				},0.08)
// 			});

// 			close.on('click', function()
// 			{
// 				// menu.toggleClass('active');
// 				TweenMax.to(menuContent, 0.4,
// 				{
// 					opacity:0
// 				});
// 				TweenMax.to(door, 1,
// 				{
// 					width:0,
// 					ease: Power3.easeOut,
// 					delay:0.6
// 				});
// 				TweenMax.to(menu, 0,
// 				{
// 					visibility:'hidden',
// 					opacity:0,
// 					delay:1.5
// 				});
// 			});
// 		}
//   }
  
  

// });


$( () => {
	
	//On Scroll Functionality
	$(window).scroll( () => {
		var windowTop = $(window).scrollTop();
		windowTop > 250 ? $('.nav').addClass('navShadow') : $('.nav').removeClass('navShadow');
		windowTop > 250 ? $('.phone-white').addClass('phone-black') : $('.phone-white').removeClass('phone-black');
		windowTop > 250 ? $('.order').addClass('order-color') : $('.order').removeClass('order-color');
  
    // windowTop > 100 ? $('ul').css('top','100px') : $('ul').css('top','160px');
	});
	
	//Click Logo To Scroll To Top
	$('#top').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		},500);
	});
	
	//Smooth Scrolling Using Navigation Menu
	$('a[href*="#"]').on('click', function(e){
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 100
		},500);
		e.preventDefault();
	});	
});
  
