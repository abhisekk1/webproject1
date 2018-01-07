jQuery(function($) {
	var owl = $('.featured-gallery');
		owl.owlCarousel({
		    items:4,
		    loop:true,
		    nav:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:4000,
		    autoplayHoverPause:true,
		    responsiveClass:true,
		    responsive:{
		    	0:{
		    		items:1
		    	},
		    	600:{
		    		items:3
		    	},
		    	1000:{
		    		items:5
		    	}
		    }
		});
	function doAnimations( elems ) {
		var animEndEv = 'webkitAnimationEnd animationend';
		elems.each(function () {
			var $this = $(this),
			$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	var $myCarousel = $('#home-slider'),
	$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
	$myCarousel.carousel();
	doAnimations($firstAnimatingElems);
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
	$(".fancybox").fancybox({
		padding: 0,

		openEffect : 'elastic',
		openSpeed  : 650,

		closeEffect : 'elastic',
		closeSpeed  : 550,

		closeClick : true,

		beforeShow: function () {
			this.title = $(this.element).attr('title');
			this.title = '<h3>' + this.title + '</h3>';
		},
		
		helpers : {
			title : { 
				type: 'inside' 
			},
			overlay : {
				css : {
					'background' : 'rgba(0,0,0,0.8)'
				}
			}
		}
	});
});
