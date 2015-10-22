$('.owl-carousel').owlCarousel({
	autoplay:true,
	autoplayTimeout:2000,
	autoplaySpeed:1000,
	loop:true,
	smartSpeed:1000,
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