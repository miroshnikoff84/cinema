$(document).ready(function(){
	$('.slider-catalog').slick({
		arrows:true,
		dots:false,
		slidesToShow:6,
		speed:1000,
		responsive:[
			{
				breakpoint: 1400,
				settings: {
					slidesToShow:5
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow:4
				}
			},
			{
				breakpoint: 992,
				settings: {
					arrows:false,
					slidesToShow:3
				}
			},
			{
				breakpoint: 768,
				settings: {
					arrows:false,
					slidesToShow:3
				}
			},
			{
				breakpoint: 426,
				settings: {
					arrows:false,
					slidesToShow:2
				}
			}
		]
	});
    $('.slider-stock').slick({
		arrows:true,
		dots:false,
		slidesToShow:6,
		speed:1000,
		responsive:[
			{
				breakpoint: 1400,
				settings: {
					slidesToShow:5
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow:4
				}
			},
			{
				breakpoint: 992,
				settings: {
					arrows:false,
					slidesToShow:3
				}
			},
			{
				breakpoint: 768,
				settings: {
					arrows:false,
					slidesToShow:3
				}
			},
			{
				breakpoint: 426,
				settings: {
					arrows:false,
					slidesToShow:2
				}
			}
		]
	});
    $('.slider-preview').slick({
		arrows:true,
		dots:true,
		slidesToShow:3,
		speed:1000,
		responsive:[
			{
				breakpoint: 1400,
				settings: {
					slidesToShow:5
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow:3
				}
			},
			{
				breakpoint: 992,
				settings: {
					arrows:false,
					slidesToShow:3
				}
			},
			{
				breakpoint: 768,
				settings: {
					arrows:false,
					slidesToShow:3
				}
			},
			{
				breakpoint: 426,
				settings: {
					arrows:false,
					slidesToShow:1
				}
			}
		]
	});
});