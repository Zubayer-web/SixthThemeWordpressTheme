
/* #On Document Ready
================================================== */




jQuery(document).ready(function() {


		// Delegate .transition() calls to .animate()
		// if the browser can't do CSS transitions.
		if (!jQuery.support.transition)
			jQuery.fn.transition = jQuery.fn.animate;


	/*	NAVIGATION INITALISATION  */
	initNav();

	/*	FULLWIDTH SLIDER ON HOMEPAGE  */
	initFullWidthSilder();

	/* NEGATIVE HOVER EFFECT */
	initNegativeHover();

	/* INFINITE BOX HANDLING */
	infiniteboxInit();

});


	//////////////////////////////////////
	// FUNCTION TO infinitebox HANDLING //
	//////////////////////////////////////
	function infiniteboxInit() {
		jQuery('.infinitebox').each(function() {
			var ibox=jQuery(this);

			ibox.transition({'width':'160px'},100);
			ibox.addClass("closed");

			ibox.find('.ib-draw').each(function() {
				var draw=jQuery(this);
				draw.click(function() {
					ibox.transition({'width':'160px'},100).transition({'width':400},600);
				});
			});
		});
	}

	//////////////////////////////
	// NAVIGATION INITALISATION //
	//////////////////////////////
	function initNav() {
		var nav = jQuery('#nav');
		nav.find('>ul>li').hover(
			function() {
				nav.find('>ul>li').css({'z-index':1});
				jQuery(this).css({'z-index':2});
			},
			function() {
				jQuery(".showsubsubme").each(function() {jQuery(this).removeClass("showsubsubme")});
		});
		nav.find('>ul>li>ul>li>ul').each(function() {
			var ul=jQuery(this);
			var li=ul.parent();
			var papaul =li.closest('ul');

			li.click(function() {
				jQuery(".showsubsubme").each(function() {jQuery(this).removeClass("showsubsubme")});
				jQuery(this).addClass("showsubsubme");
					ul.css({'paddingTop':papaul.outerHeight(true)-li.position().top-10});
			});
		});

	}


	//////////////////////////////
	// FULLWIDTH SLIDER			 //
	//////////////////////////////

	function initFullWidthSilder() {


		jQuery('.fullwidth_slider').each(function() {
			// CATCH ALL THE ENTRIES

			var fwslider = jQuery(this);
			fwslider.find('.fs-entry').each(function() {
					var ent=jQuery(this);


					// WRAP THE ENTRIES IN DIVS
					ent.append('<div class="image_wrapper"><div class="image_innerwrapper"><div class="imageholder"></div></div></div>');

					// SET THE BG OF THE CONTAINERS
					ent.find('.imageholder').css({'background-image':'url('+ent.data("src")+')'});

					// ON HOVER WE HIDETHE OTHER ENTRIES
					ent.find('.seemore').hover(
					function() {
						if (jQuery('.fullwidth_slider').data('drag') != 1)
							jQuery('.fullwidth_slider .fs-entry').each(function() {
								jQuery(this).addClass("notselected");
								ent.removeClass("notselected");
							})
					},
					function() {
						jQuery('.fullwidth_slider .fs-entry').each(function() {
							jQuery(this).removeClass("notselected");
						})
					})

					ent.find('.seemore').click(function() {
						var ent=jQuery(this).parent();

						jQuery('.fullwidth_slider .fs-entry').each(function() {
							jQuery(this).removeClass("notselected").addClass("allnotselected").removeClass('selected');
						});
						ent.removeClass('allnotselected').addClass("selected");
						var mi=ent.closest('.slider_wrapper').find('.fs-moreinfo');

						mi.slideUp(300);
						setTimeout(function() { mi.html(ent.data('content'));},300);
						mi.delay(100).slideDown(500);
					})
			});


			// CALL THE SWIPE FUNCTION TO THE ITEM
			fwslider.parent().overscroll({
				cancelOn: '.no-drag',
				hoverThumbs: true,
				//persistThumbs: true,
				showThumbs: false,
				scrollLeft: 300,
				direction:"horizontal",
				wheelDirection:"vertical",
				scrollDelta:5.7,
				scrollLeft: 0,
				captureThreshold:1,
				driftDecay:1.1,
				driftTimeout: 100
			}).on('overscroll:dragstart overscroll:driftstart', function(event){

				jQuery('.fullwidth_slider .fs-entry').each(function() {
							jQuery(this).removeClass("notselected");
						})
				fwslider.data('drag',1);
			}).on('overscroll:dragend overscroll:driftend', function(event){
								fwslider.data('drag',0);
			});




		});



		// RESIZE THE ENTRIES, AND TAN RESIZE EVERY TIME WE NEED
		resizeFullWidthSlider();
		jQuery(window).resize(function() {
			resizeFullWidthSlider();
		});
	}

	///////////////////////////////////
	// THE FULLWIDTH SLIDER RESIZING //
	///////////////////////////////////
	function resizeFullWidthSlider() {
		jQuery('.fullwidth_slider').each(function() {
			var l=0;
			var t=0;
			var fwslider=jQuery(this);

			// WIDTH OF THE SCREEN
			var sw=jQuery(window).width();

			// THE DIMENSION OF THE CURRENT ITEM
			var ww=0;
			var hh=0;


			// THE HEIGHT OF THE FULLWIDTH SLIDER
			var fwheight = 450;
			var fwwidth = 450;

			// THE X OFFSET BETWEEN THE IMAGES !
			var xoffset=20;

			if (sw<1200) {
				var prop = (sw/1200)*1.3;
				if (prop>1) prop=1;
				fwheight=Math.round(fwheight*prop);
				fwwidth=Math.round(fwwidth*prop);
			}

			// SET THE RIGHT HEIGHT OF THE ELEMENT
			fwslider.height(fwheight);

			jQuery(this).find('.fs-entry').each(function() {
					var ent=jQuery(this);

					// SIZING THE BOXES
					if (ent.hasClass("fs-maxw")) ww=fwwidth;
					if (ent.hasClass("fs-twothirdw")) ww=fwwidth/3*2;
					if (ent.hasClass("fs-onethirdw")) ww=fwwidth/3;
					if (ent.hasClass("fs-halfw")) ww=fwwidth/2;

					if (ent.hasClass("fs-maxh")) hh=fwheight;
					if (ent.hasClass("fs-twothirdh")) hh=fwheight/3*2;
					if (ent.hasClass("fs-onethirdh")) hh=fwheight/3;
					if (ent.hasClass("fs-halfh")) hh=fwheight/2;

					// POSITION OF THE ITEMS
					ent.css({'width':ww+"px", 'height':hh+"px",'left':l+"px", 'top':t+"px"});

					// REPOSITION THE NEXT ITEM

					if (t+ent.height()<fwheight-4)
						t=t+ent.height();
					else
						{
							t=0;
							l=l+ent.width()+xoffset;
						}
					fwslider.width(l);
			})
		})
	  }


	///////////////////////////////////
	// Negative Hover Effect Init    //
	///////////////////////////////////
	function initNegativeHover() {

		jQuery('.negativehover').each(function() {
			var gr=jQuery(this);
			gr.find('.nhitem').each(function() {
						var it=jQuery(this);
						it.hover(
							function() {
										gr.find('.nhitem').each(function() {
												jQuery(this).addClass('faded');
										})
										jQuery(this).removeClass('faded');
								},
								function() {
										gr.find('.nhitem').each(function() {
													jQuery(this).removeClass('faded');
											})
								})
			})
		})
	}




