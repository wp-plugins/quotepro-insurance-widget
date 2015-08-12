(function ($) {
	"use strict";
	$(function () {
		$(window).on("message", function(e) {
		    var oe = e.originalEvent;
		    if (!oe.origin.match(/.processmyquote.com/)) return;
		    if (typeof oe.data == "string" && oe.data.indexOf("url:") == 0) {
				document.location = oe.data.substr(4);
            }
		});
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