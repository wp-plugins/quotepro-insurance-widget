(function ($) {
	"use strict";
	$(function () {
	      $('form.quotepro-insurance-widget .colorbox').colorbox({iframe: true, top: 50, width: "90%",height: $(window).height()-100, close:"X"});
		$('form.quotepro-insurance-widget').submit(function(e) {
                var action = $(this).prop('action')+"?"+$(this).serialize();
                e.preventDefault();
		    	if ( $(window).width() < 900 ) {
			 		document.location = action.replace('Home/Prefill','Mobile/Quote');
                } else {
	        		$('.colorbox',this).attr('href',action).click();
                }
            });
	});
}(jQuery));