$(document).ready(function () {
	$('.slider-catalog').slick({
		arrows: true,
		dots: false,
		slidesToShow: 5,
		autoplay: true,
		autoplaySpeed: 4000,
		responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				arrows: false
			}
		},
		{
			breakpoint: 376,
			settings: {
				slidesToShow: 2,
				arrows: false
			}
		}
	]
	});
	$('.slider-stock').slick({
		arrows:true,
		dots:false,
		slidesToShow:4,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					arrows: false
				}
			},
			{
				breakpoint: 376,
				settings: {
					slidesToShow: 2,
					arrows: false
				}
			}
		]
	});
	$('.slider-preview').slick({
		arrows:true,
		dots:false,
		slidesToShow:4,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					arrows: false
				}
			},
			{
				breakpoint: 376,
				settings: {
					slidesToShow: 1,
					arrows: false
				}
			}
		]
	});
	$('.slider-session').slick({
		arrows:true,
		dots:false,
		slidesToShow:3,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					arrows: false
				}
			},
			{
				breakpoint: 376,
				settings: {
					slidesToShow: 1,
					arrows: false
				}
			}
		]
	});
});
