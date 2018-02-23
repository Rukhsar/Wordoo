		(function($) {
			"use strict";
			//video background setting  
			var BV = new $.BigVideo({
				container: $('#home'),
				 useFlashForFirefox: false
			});
			BV.init();
			if (Modernizr.touch) {
				//replace the data-background into background image
				$(".img-bg").each(function() {
					var imG = $(this).data('background');
					$(this).css('background-image', "url('" + imG + "') "
		
					);
				});
			} else {
				BV.show(
					$(".bg-vid").data("link"), //video source directlink 
					{ambient: $(".bg-vid").data("ambient")} //mute true
				);
			}
		})(jQuery);