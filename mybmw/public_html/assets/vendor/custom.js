/*
Theme Name: BMW
Author: Acit Jazz  2015
Version: 1.0
Tags:
*/

/** NAVIGATION **/
(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
/** END NAVIGATION **/

$(document).ready(function(){
				$(".test_drive").on("click", function(){
				var  typenya = 1;
			
				$.ajax({
                        'type': 'POST',
                        'url': basedomain+'tracking',
                        'data': {typenya:typenya},
						'dataType':'json'

					})
				});
				$(".download").on("click", function(){
				var  typenya = 3;
				$.ajax({
                        'type': 'POST',
                        'url': basedomain+'tracking',
                        'data': {typenya:typenya},
						'dataType':'json',
                        'success': function(result){
					
						if(result.status==true)
												{
												//$('.twittershare').trigger('click');
												//return true;
												}
						
										}
					})
					//return false;
				});
			$(".register").on("click", function(){
			var  typenya = 4;
			
				$.ajax({
                        'type': 'POST',
                        'url': basedomain+'tracking',
                        'data': {typenya:typenya},
						'dataType':'json',
                        'success': function(result){
					
						if(result.status==true)
												{
												//$('.twittershare').trigger('click');
												//return true;
												}
						
										}
					})
					//return false;
				});
			$(".jointhetour").on("click", function(){
			var  typenya = 6;
			
				$.ajax({
                        'type': 'POST',
                        'url': basedomain+'tracking',
                        'data': {typenya:typenya},
						'dataType':'json',
                        'success': function(result){
					
						if(result.status==true)
												{
												//$('.twittershare').trigger('click');
												//return true;
												}
						
										}
					})
					//return false;
				});
			$(".twittershare").on("click", function(){
			var  typenya = 2;
			
				$.ajax({
                        'type': 'POST',
                        'url': basedomain+'tracking',
                        'data': {typenya:typenya},
						'dataType':'json'

					})
				});
			function shareFB(fb_name,fb_link,fb_img,fb_user,fb_post){
						$("#bg-popup").fadeOut();
						$(".popup,.popup2").fadeOut();
						FB.init();
						FB.ui({
							method: 'feed',
							name: fb_name,
							link: fb_link,
							picture: fb_img,
							caption: fb_user,
							description: fb_post
							
							
						});
							 
					};
					
				    $("#registration").validate({
				        rules: {
				            salutation: {required: true},
				            firstname: {required: true},
				            lastname: {required: true},
				            email: {required: true},
				            phone: {number:true, required: true}
				        },
				        messages: {
				            salutation: "You cannot leave this field empty",
				            firstname: "You cannot leave this field empty",
				            lastname: "You cannot leave this field empty",
				            email: "You cannot leave this field empty",
				            phone: "You cannot leave this field empty",
				        },
				        tooltip_options: {
				            email: {trigger:'focus'},
				            agree: {placement:'right',html:true}
				        },
				        errorPlacement: function (error, element) {
				        	  if(element.attr("name") == "salutation"){
							       $('#salutation_error').html(error.text());
							  }
				        	  if(element.attr("name") == "firstname"){
							       $('#firstname_error').html(error.text());
							  }
				        	  if(element.attr("name") == "lastname"){
							       $('#lastname_error').html(error.text());
							  }
				        	  if(element.attr("name") == "email"){
							       $('#email_error').html(error.text());
							  }
				        	  if(element.attr("name") == "phone"){
							       $('#phone_error').html(error.text());
							  }
				        	
				        },
				        submitHandler: function (form) { 
				            $("input").css("background-color", "#ccc" );
							$('.pesanwite').html('Submiting Your Data ...');
							 $(form).submit();
           					 return false; 
				        }
				    });
					$('.number').keyup(function () {  
						if(this.value)
						{
							this.value = this.value.replace(/[^0-9]/g,''); 
							
						}
					});
					$('.string').keyup(function () {  
						if(this.value)
						{
							this.value = this.value.replace(/[^a-zA-Z'"]/g,''); 
							
						}
					});	
					


    $('iframe').each(function(){
        var url = $(this).attr("src");
        $(this).attr("src",url+"?wmode=transparent");
    });					   
	$('a.scrolldown,a.keepme').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});
	//DROPDOWN
	$('#main-menu').supersubs({
		minWidth:	12,	 // minimum width of submenus in em units
		maxWidth:	27,	 // maximum width of submenus in em units
		extraWidth:	1	 // extra width can ensure lines don't sometimes turn over
						 // due to slight rounding differences and font-family
	}).superclick();		 // call supersubs first, then superfish, so that subs are
						 // not display:none when measuring. Call before initialising
						 // containing tabs for same reason.
		// TRIGGER ACTIVE STATE
		$('#mobnav-btn').click(
		
		function () {
			$('.sf-menu').toggleClass("xactive");
		});
		
		
		
		// TRIGGER DROP DOWN SUBS
		$('.mobnav-subarrow').click(
		
		function () {
			$(this).parent().toggleClass("xpopdrop");
		});
		
	//SLIDER
	$('.bxslider').bxSlider({
	  mode: 'fade',
	});
	$('.bxslider2').bxSlider({
	  mode: 'fade',
	});
	
	// Image popups
	
	$('.showPopupImg').magnificPopup({
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
	$(function() {
	$( ".play" ).click(function() {
		$( "#headercontainer" ).toggleClass( "hide" );
		$( "body" ).toggleClass( "video-play" );
		return false;
	});
	});
	wow = new WOW({
	  boxClass:     'wow',      // default
	  animateClass: 'animated', // default
	  offset:       0,          // default
	  mobile:       true,       // default
	  live:         true        // default
	})
	wow.init();
	
	$('.closevideo').click(function(){
		$( "#headercontainer" ).removeClass( "hide" );
		$( "body" ).removeClass( "video-play" );
		 $('#player').remove();
		 $( "#containervideo" ).append( '<div id="player" class="home-player autoheight"></div>' );
	});
});

$(function(){
  $('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheights').css({ height: $(window).innerHeight() + 'px' });

  $(window).resize(function(){
	$('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheights').css({ height: $(window).innerHeight() + 'px' });
  });
});

//YOUTUBE PLAYER BANNER
$("#playbutton").click(function(){
	player = new YT.Player('player', {
		width : '320',
		height : '180',
		quality: 'hd720',
		videoId : 'KSMgU16Cg9A',
		playerVars: { 'autoplay': 1,'rel': 0 },
		events : {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
	$(function(){
	  $('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
	});
    $('iframe').each(function(){
        var url = $(this).attr("src");
        $(this).attr("src",url+"?wmode=transparent");
    });
});

$("#playbutton2").click(function(){
	player = new YT.Player('player', {
		quality: 'hd720',
		videoId : 'C49plwnW624',
		playerVars: { 'autoplay': 1,'rel': 0, 'vq':'hd720'  },
		events : {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
	$(function(){
	  $('.autoheight').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
	});
    $('iframe').each(function(){
        var url = $(this).attr("src");
        $(this).attr("src",url+"?wmode=transparent");
    });
});
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onPlayerReady(event) {
	//event.target.playVideo();
}
function onPlayerStateChange(event) {
	if(event.data == YT.PlayerState.ENDED) {
		player.destroy();
		$( "#headercontainer" ).removeClass( "hide" );
		$( "body" ).removeClass( "video-play" );
	}
}

$(document).ready(function(){
	
    $(".tutup").click(function(){
        $(".banner800x600px").hide();
		$(".banner300x250px").show();
		$(".banner300x250px1").hide();
        document.getElementById("contentnya").className = "";
        document.getElementById("contentnya").className = "container collapse";
		document.getElementById("homepage").setAttribute("style","opacity:100; -moz-opacity:100; filter:alpha(opacity=100)");;
    });
	
	
	
});
$('#NEXT').on('click',function(){
    if ((document.myform.name.value =="") || (document.myform.email.value =="") || (document.myform.phone.value == "")){
        alert("Belum Lengkap");
        return false; 
    }else{
        $( "#myform" ).submit();
		
    }
	
});

function lanjutBtn () {
	$(".banner300x250px").hide();
	$(".banner300x250px1").show();
    $('.banner800x600px').css("background-image","url('assets/images/800x600_fix.jpg')");
	document.getElementById("contentnya").className = "";
    document.getElementById("contentnya").className = "contentnya expand";
    $('#tab2').show();
    $('#tab1').hide();
	document.getElementById("homepage").setAttribute("style","opacity:0.2; -moz-opacity:0.2; filter:alpha(opacity=10)");;
}

