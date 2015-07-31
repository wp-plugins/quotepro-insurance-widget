(function ($) {
	"use strict";
	$(function () {
	      $('form.quotepro-insurance-widget .qiw-colorbox').colorbox({iframe: true, top: 50, width: "90%",height: $(window).height()-100, close:"X"});
		$('form.quotepro-insurance-widget').submit(function(e) {
                var action = $(this).prop('action')+"?"+$(this).serialize();
	    	if ( $(window).width() < 900 ) {
	                e.preventDefault();
	 		document.location = action.replace('Home/Prefill','Mobile/Quote');
                } else if ( navigator.userAgent.indexOf("Safari") > -1 && navigator.userAgent.indexOf("OS X") > -1) {
					window.open(action);
	                e.preventDefault();
				} else {
					$('.qiw-colorbox',this).attr('href',action).click();
					e.preventDefault();
                }
            });
	});
}(jQuery));