$(document).ready(function(){
	$('.slider-catalog').slick({
		arrows:true,
		dots:false,
		slidesToShow:5,
		speed:1000,
		// responsive:[
		// 	{
		// 		breakpoint: 768,
		// 		settings: {
		// 			slidesToShow:2
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 550,
		// 		settings: {
		// 			slidesToShow:1
		// 		}
		// 	}
		// ]
	});
    $('.slider-stock').slick({
		arrows:true,
		dots:false,
		slidesToShow:6,
		speed:1000,
		// responsive:[
		// 	{
		// 		breakpoint: 768,
		// 		settings: {
		// 			slidesToShow:2
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 550,
		// 		settings: {
		// 			slidesToShow:1
		// 		}
		// 	}
		// ]
	});
    $('.slider-preview').slick({
		arrows:true,
		dots:true,
		slidesToShow:3,
		speed:1000,
		// responsive:[
		// 	{
		// 		breakpoint: 768,
		// 		settings: {
		// 			slidesToShow:2
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 550,
		// 		settings: {
		// 			slidesToShow:1
		// 		}
		// 	}
		// ]
	});
});