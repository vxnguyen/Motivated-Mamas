( function($) {

	// Set landing page height
	$(window).load(function() {
  		var $headerHeight = $("#masthead").height() + 40;
  		var $landing = $(".landing");
  		var $landingHeight = $(window).height() - $headerHeight;
  		
  		$landing.css("height", $landingHeight);
	});

	$( document ).ready(function() {
		var $closeButton = $("#refund-close");
		var $openButton = $("#refund-open");
		var $openButtonLink = $("#refund-open-link");
		var $refundPolicy = $(".refund-policy-container");
		var $background = $("body")

		// Open Refund Policy Overlay
		$openButton.click(function() {
			 $refundPolicy.fadeIn();
			 $background.css("overflow", "hidden");
		});

		// Close Refund Policy Overlay
		$closeButton.click(function() {
			 $refundPolicy.fadeOut();
			 $background.css("overflow", "scroll");
		});

		var $question = $(".question");
		var $answer = $(".answer");

		// Open and close answers to FAQs questions
		$question.click(function() {
			if ($(this).next(".answer").css('display') == 'block') {
				$(this).next(".answer").slideUp();
				$(this).filter(".faqs-arrow").toggleClass("rotate");
			} else
			$(this).next(".answer").slideDown();
			$(this).children(".faqs-arrow").toggleClass("rotate");
		});

		// Stripe
		var stripe = Stripe('pk_test_fFbf4nipNoTns0Sj5QZZIj8p');

	});






;})(jQuery);