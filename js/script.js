$('.local-video-container .play-button').click(function() {
	$(this).toggleClass('video-playing');
	$(this).closest('.local-video-container').find('.background-image-holder').toggleClass('fadeout');
	var video = $(this).closest('.local-video-container').find('video');
	if (video.get(0).paused === true) {
		video.get(0).play();
	} else {
		video.get(0).pause();
	}
});

$('video').bind("pause", function() {
	var that = this;
	triggerVid = setTimeout(function() {
		$(that).closest('section').find('.play-button').toggleClass('video-playing');
		$(that).closest('.local-video-container').find('.background-image-holder').toggleClass('fadeout');
		$(that).closest('.modal-video-container').find('.modal-video').toggleClass('reveal-modal');
	}, 100);
});

$('video').on('play', function() {
	if (typeof triggerVid === 'number') {
		clearTimeout(triggerVid);
	}
});

$('video').on('seeking', function() {
	if (typeof triggerVid === 'number') {
		clearTimeout(triggerVid);
	}
});

// Video controls for modals

$('.modal-video-container .play-button').click(function() {
	$(this).toggleClass('video-playing');
	$(this).closest('.modal-video-container').find('.modal-video').toggleClass('reveal-modal');
	$(this).closest('.modal-video-container').find('video').get(0).play();
});

$('.modal-video-container .modal-video').click(function(event) {
	var culprit = event.target;
	if ($(culprit).hasClass('modal-video')) {
		$(this).find('video').get(0).pause();
	}
});

$('video').bind("pause", function() {
	var that = this;
	triggerVid = setTimeout(function() {
		$(that).closest('section').find('.play-button').toggleClass('video-playing');
		$(that).closest('.local-video-container').find('.background-image-holder').toggleClass('fadeout');
		$(that).closest('.modal-video-container').find('.modal-video').toggleClass('reveal-modal');
	}, 100);
});

$('video').on('play', function() {
	if (typeof triggerVid === 'number') {
		clearTimeout(triggerVid);
	}
});

$('video').on('seeking', function() {
	if (typeof triggerVid === 'number') {
		clearTimeout(triggerVid);
	}
});

// Video controls for modals

$('.modal-video-container .play-button').click(function() {
	$(this).toggleClass('video-playing');
	$(this).closest('.modal-video-container').find('.modal-video').toggleClass('reveal-modal');
	$(this).closest('.modal-video-container').find('video').get(0).play();
});

$('.modal-video-container .modal-video').click(function(event) {
	var culprit = event.target;
	if ($(culprit).hasClass('modal-video')) {
		$(this).find('video').get(0).pause();
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