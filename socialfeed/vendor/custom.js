$(function(){
  $('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheights').css({ height: $(window).innerHeight() + 'px' });

  $(window).resize(function(){
	$('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheights').css({ height: $(window).innerHeight() + 'px' });
  });
});

$(document).ready(function() {
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})		
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,
	  
	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});
	//wow
	$("area[rel^='cosmicgallery']").prettyPhoto();
	
	$(".gallery:first a[rel^='cosmicgallery']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:10000, autoplay_slideshow: false});
	
});
	  
$(window).load(function() {

	  wow = new WOW(
		{
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
	  )
	  wow.init();
});