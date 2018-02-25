$( document ).ready(function() {

	// slick settings
	$(".heroslider_container").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: false,
	    dots: false,
	    fade: true,
	    speed: 900,
	    infinite: true,
	    // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	    // touchThreshold: 100,
	    // prevArrow: $('.prev'),
	    // nextArrow: $('.next')
	});

	// slick settings
	$(".heroslider_mobile_container").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: false,
	    dots: false,
	    fade: false,
	    speed: 900,
	    infinite: true,
	    // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	    // touchThreshold: 100,
	    // prevArrow: $('.prev'),
	    // nextArrow: $('.next')
	});

	$(".brand_hover").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: false,
	    dots: false,
	    // fade: true,
	    speed: 900,
	    infinite: true,
	    slidesToShow: 5,
	    responsive: [
	        {
	          breakpoint: 770,
	          settings: {
	            slidesToShow: 3,
	            // slidesToScroll: 3,
	            // infinite: true,
	            // dots: true
	          }
	        }
	    ]
	});

	$(".customers_slider").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: false,
	    dots: false,
	    // fade: true,
	    speed: 900,
	    infinite: true,
	    slidesToShow: 5,
	    responsive: [
	        {
	          breakpoint: 770,
	          settings: {
	            slidesToShow: 3,
	            // slidesToScroll: 3,
	            // infinite: true,
	            // dots: true
	          }
	        }
	    ]
	});

	$(".collection_slider_1").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: true,
	    dots: false,
	    // fade: true,
	    speed: 500,
	    infinite: true,
	    slidesToShow: 4,
	    prevArrow: $('.prev_1'),
	    nextArrow: $('.next_1'),
	    responsive: [
	        {
	          breakpoint: 600,
	          settings: {
	            slidesToShow: 3,
	            // slidesToScroll: 3,
	            // infinite: true,
	            // dots: true
	          }
	        }
	    ]
	});

	$(".collection_slider_2").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: true,
	    dots: false,
	    // fade: true,
	    speed: 500,
	    infinite: true,
	    slidesToShow: 4,
	    prevArrow: $('.prev_2'),
	    nextArrow: $('.next_2'),
	    responsive: [
	        {
	          breakpoint: 600,
	          settings: {
	            slidesToShow: 3,
	            // slidesToScroll: 3,
	            // infinite: true,
	            // dots: true
	          }
	        }
	    ]
	});

	$(".collection_slider_3").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: true,
	    dots: false,
	    // fade: true,
	    speed: 500,
	    infinite: true,
	    slidesToShow: 4,
	    prevArrow: $('.prev_3'),
	    nextArrow: $('.next_3'),
	    responsive: [
	        {
	          breakpoint: 600,
	          settings: {
	            slidesToShow: 3,
	            // slidesToScroll: 3,
	            // infinite: true,
	            // dots: true
	          }
	        }
	    ]
	});

	// slick settings
	$(".heritage_container").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: false,
	    dots: false,
	    fade: true,
	    speed: 900,
	    infinite: true,
	    // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	    // touchThreshold: 100,
	    // prevArrow: $('.prev'),
	    // nextArrow: $('.next')
	});

	// slick settings
	$(".heritageslider_mobile_container").slick({
	    autoplay: true,
	    draggable: true,
	    arrows: false,
	    dots: false,
	    fade: false,
	    speed: 900,
	    infinite: true,
	    // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	    // touchThreshold: 100,
	    // prevArrow: $('.prev'),
	    // nextArrow: $('.next')
	});

});
