$('.owl-carousel').owlCarousel({
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
	smartSpeed:1000,
	loop:true,
	dots:false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 3
		}
	}
});