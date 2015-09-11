(function($,window) {
	var check_sticky = function() {
		var $stick_image = $('.stick-image');
		var dist = $stick_image.offset().top - $(window).scrollTop();

		if ( dist <= 0 && ! $stick_image.hasClass('sticky') ) {
			$stick_image.addClass('sticky');
		}

		if ( dist > 0 && $stick_image.hasClass('sticky') ) {
			$stick_image.removeClass('sticky');
		}
	};
	$(window).on("load scroll resize", check_sticky );
}(jQuery,window));