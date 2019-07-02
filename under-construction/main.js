	(function($) {

		"use strict";


		/*----------------------------------------------------*/
	  	/* Smooth Scrolling
	  	------------------------------------------------------*/
	  	$('.smoothscroll').on('click', function (e) {
		 	
		 	e.preventDefault();

	   	var target = this.hash,
	    	$target = $(target);

	    	$('html, body').stop().animate({
	       	'scrollTop': $target.offset().top
	      }, 800, 'swing', function () {
	      	window.location.hash = target;
	      });

	  	});

	  	/* --------------------------------------------------- */
		/*  Placeholder Plugin Settings
		------------------------------------------------------ */
		$('input, textarea, select').placeholder();


		/*---------------------------------------------------- */
		/*	contact form
		------------------------------------------------------ */
		function doSomthing(msg) {
			var result = $.trim(msg);
			if (result !== "You are a robot and we don't like you...") {
				$('#message-warning').hide();
				$('html, body').animate({
					scrollTop: $('#contact').offset().top
				}, 500, 'linear');
				$('#message-success').html("<i class='fa fa-check'></i> Thank You! Your message has been sent.").fadeIn().delay(5000).fadeOut();
				$('.contact__form').find('input:not([type="submit"]), textarea').val('');
				grecaptcha.reset();
			} else {
				$('html, body').animate({
					scrollTop: $('#contact').offset().top
				}, 500, 'linear');
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
					doSomthing(msg);
			      },
			      error: function() {
			      	sLoader.fadeOut(); 
			      }

			    });     		
	  		}


		});		


		/*----------------------------------------------------*/
		/* Final Countdown Settings
		------------------------------------------------------ */
		var finalDate = '2019/07/15';

		$('div#counter').countdown(finalDate)
	   	.on('update.countdown', function(event) {

	   		$(this).html(event.strftime('<div class=\"half\">' +
	   											 '<span>%D <sup>days</sup></span>' + 
	   										 	 '<span>%H <sup>hours</sup></span>' + 
	   										 	 '</div>' +
	   										 	 '<div class=\"half\">' +
	   										 	 '<span>%M <sup>mins</sup></span>' +
	   										 	 '<span>%S <sup>secs</sup></span>' +
	   										 	 '</div>'));

	   });  

	})(jQuery);