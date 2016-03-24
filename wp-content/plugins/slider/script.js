var slider = $('.owl-carousel');

slider.owlCarousel({
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

var items = slider.find('.slider_item');

changeHeight();

window.onresize = changeHeight;

function changeHeight(){
	$(items).each(function(i, item){
		var width = $(item).width();
		var height = width / 1.5;
		$(item).height(height);
	});	
}