$('.video').parent().click(function () {
	if($(this).children(".video").get(0).paused){        $(this).children(".video").get(0).play();   $(this).children(".play-button").fadeOut();
	  }else{       $(this).children(".video").get(0).pause();
	$(this).children(".play-button").fadeIn();
	  }
});


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


$('.js-click-modal').click(function(){
	$('.container-auth').addClass('modal-main-open');
  });
  
  $('.js-close-modal').click(function(){
	$('.container-auth').removeClass('modal-main-open');
  });




  $(".modal").each( function(){
	$(this).wrap('<div class="overlay"></div>')
  });
  
  $(".open-modal").on('click', function(e){
	e.preventDefault();
	e.stopImmediatePropagation;
	
	var $this = $(this),
		modal = $($this).data("modal");
	
	$(modal).parents(".overlay").addClass("open");
	setTimeout( function(){
	  $(modal).addClass("open");
	}, 350);
	
	$(document).on('click', function(e){
	  var target = $(e.target);
	  
	  if ($(target).hasClass("overlay")){
		$(target).find(".modal").each( function(){
		  $(this).removeClass("open");
		});
		setTimeout( function(){
		  $(target).removeClass("open");
		}, 350);
	  }
	  
	});
	
  });
  
  $(".close-modal").on('click', function(e){
	e.preventDefault();
	e.stopImmediatePropagation;
	
	var $this = $(this),
		modal = $($this).data("modal");
	
	$(modal).removeClass("open");
	setTimeout( function(){	
	  $(modal).parents(".overlay").removeClass("open");
	}, 50);
	
  });	


function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
	  tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
	  tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
  }
  
