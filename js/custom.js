// for external links
function link(name) {
	var win = window.open('http://' + name, '_blank');
	if (win) {
		//Browser has allowed it to be opened
		win.focus();
	} else {
		//Browser has blocked it
		alert('Please allow popups for this website');
	}
}

/* contact form */
(function($) {
	function message(msg) {
		var result = $.trim(msg);
		if (result !== "You are a robot and we don't like you...") {
			$('#message-warning').hide();
			$('#message-success').html("<i class='fa fa-check'></i> Thank You! Your message has been sent.").fadeIn().delay(5000).fadeOut();
			$('.contact__form').find('input:not([type="submit"]), textarea').val('');
			grecaptcha.reset();
		} else {
			$('#message-warning').html("<i class='fa fa-window-close-o'></i> Try again, but this time verify you are not a robot.").fadeIn().delay(5000).fadeOut();
		}
	}
	/* local validation */
	$('.contact__form').validate({

		/* submit via ajax */
		submitHandler: function(form) {

			var sLoader = $('.linear-loader');

			$.ajax({

				type: "POST",
				url: "mailer.php",
				data: $(form).serialize(),
				beforeSend: function() {
				sLoader.fadeIn();
				},
				success: function(msg) {
				sLoader.fadeOut();
				message(msg);
				},
				error: function() {
				sLoader.fadeOut();
				}

			});
		}


	});
})(jQuery);


$(document).ready(function(){


	/*toggle mobile menu*/
	$('.menu .logo').on('click', function(){
		$('body').toggleClass("menu-active");
		// for hammerjs nav action state
	});

	if (window.innerWidth < 767 ) {
		$('#work').addClass("design");
		$('.menu-wrapper .button-link:first-child').addClass("active");
	}

	/* details - design proj slide out*/
	$('.design .cover').on('click',function(){

		$('#detail').scrollTop(0);

		var el = $(this).find(".ux-proj-detail").html();
		$('#detail').html(el);
		$('.page-container').removeClass('develop-detail').addClass('design-detail');

		$('#detail .button-back').on('click', function(){
			$(this).removeClass("position-fixed");
			$('.page-container').removeClass('design-detail');
		});
	});

	/* details - develop proj slide out*/
	$('.develop .cover').on('click',function(){

		$('#detail').scrollTop(0);

		var el = $(this).find(".ui-proj-detail").html();
		$('#detail').html(el);
		$('.page-container').removeClass('design-detail').addClass('develop-detail');

		$('#detail .button-back').on('click', function(){
			$(this).removeClass("position-fixed");
			$('.page-container').removeClass('develop-detail');
		});

	});

	/* details - design skills slide out*/
	$('.ux-detail-btn').on('click',function(){
		$('#detail').scrollTop(0);

		var el = $('#design .detail-container').find(".ux-proj-detail").html();
		$('#detail').html(el);
		$('.page-container').removeClass('develop-detail').addClass('design-detail');

		$('#detail .button-back').on('click', function(){
			$('.page-container').removeClass('design-detail');
		});

	});
	/* details - develop skills slide out*/
	$('.ui-detail-btn').on('click',function(){
		$('#detail').scrollTop(0);

		var el = $('#develop .detail-container').find(".ui-proj-detail").html();
		$('#detail').html(el);
		$('.page-container').removeClass('design-detail').addClass('develop-detail');

		$('#detail .button-back').on('click', function(){
			$('.page-container').removeClass('develop-detail');
		});

	});	

	/* stick nav for details */
	$('#detail').scroll(function(){
		if ($(this).scrollTop() > 0 ) {
			$('#detail header').addClass('shadow');
		} else {
			$('#detail header').removeClass('shadow');
		} 
	});


	/*primary navigation*/
	$('.js-link').on('click', function(e) {
	    e.preventDefault();
	    var thisRef = $(this).attr('href');
			thisRef = thisRef.substring(1);

			if (thisRef === 'design' || thisRef === 'develop') {
				// alert('I clicked design or develop');
				$('.page-container').removeClass().addClass('page-container js work');
				$('#work').removeClass().addClass('work ' + thisRef);
			} else if (thisRef === 'reset') {
					$('.page-container').removeClass().addClass('page-container js work');
					$('#work').removeClass().addClass('work');
			} else {
				// alert('I clicked something else');
				$('.page-container').removeClass().addClass('page-container js ' + thisRef);
			}
			$('body').removeClass("menu-active");
			makeActive(thisRef);
	});

	function makeActive(thisLink) {
		$('.menu a').removeClass('active');
		if (thisLink === 'about') {
			$('.menu a:nth-of-type(1)').addClass('active');
		} else if (thisLink === 'contact') {
			$('.menu a:nth-of-type(4)').addClass('active');
		} else if (thisLink === 'work') {
			workClass = $(".work .work").attr('class').substring(5);
			if (workClass === 'design') {
				$('.menu a:nth-of-type(2)').addClass('active');
			} else {
				$('.menu a:nth-of-type(3)').addClass('active');
			}
		} else if (thisLink === 'design') {
			$('.menu a:nth-of-type(2)').addClass('active');
		} else if (thisLink === 'develop') {
			$('.menu a:nth-of-type(3)').addClass('active');
		} else {
			console.log('do not do anything');
		}
	}

	/*mobile detection and gesture (hammerjs)*/
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			function verticalScroll(thisRef){
				$('.page-container').removeClass().addClass('page-container js ' + thisRef);
				makeActive(thisRef);
			}
			function horizontalScroll(thisRef){
				$('#work').removeClass().addClass('work ' + thisRef);
				makeActive(thisRef);
			}

			var aboutID = document.getElementById('about');
			var nabout = new Hammer(aboutID);
			nabout.get('pan').set({ direction: Hammer.DIRECTION_ALL });
			nabout.on("panup", function(ev) {verticalScroll('work')});

			var workID = document.getElementById('work');
			var nwork = new Hammer(workID);
			nwork.get('pan').set({ direction: Hammer.DIRECTION_ALL });
			nwork.on("pandown", function(ev) {verticalScroll('about')});
			nwork.on("panup", function(ev) {verticalScroll('contact')});
			nwork.on("panleft", function(ev) {
				horizontalScroll('develop');
				$(".overlay").css("z-index", "999");
				setTimeout(
				function() {
					$(".overlay").css("z-index", "-1");
				}, 250);
			});
			nwork.on("panright", function(ev) {
				horizontalScroll('design');
				$(".overlay").css("z-index", "999");
				setTimeout(
				function() {
					$(".overlay").css("z-index", "-1");
				}, 250);
			});

			var contactID = document.getElementById('contact');
			var ncontact = new Hammer(contactID);
			ncontact.get('pan').set({ direction: Hammer.DIRECTION_ALL });
			ncontact.on("pandown", function(ev) {verticalScroll('work')});

			$('body').append("<div class='mobile-only'><strong class='legend'>Click on the screen to proceed.</strong><div class='gesture-instruction'><div class='v-layout'></div><div class='h-layout'></div><div class='device'></div></div></div>");

			$('.mobile-only').on('click', function(){
				$(this).remove();
			});
		
    }	




});
