$(document).ready(function(){
	
	$('.products__filter button').click(function(){
		$(this).addClass('filter-active');		
		$(this).siblings().removeClass('filter-active');
		var active = ($(this).attr('id'));
		if (active == 'all') {
			$('.products__item').slideDown();	
		} else {
			active = '.' + active;
			$('.products__item').filter(':not(' + active + ')').slideUp();
			$('.products__item').filter(active).delay(300).slideDown();
		}
	});
	
	var activeProduct = $(location).attr('href');
	activeProduct = activeProduct.split('#');
	activeProduct = activeProduct[1];
	if (activeProduct == undefined) {
		$('.products__item').slideDown();
	} else {
		activeProduct = '.' + activeProduct;
		$('.products__item').filter(':not(' + activeProduct + ')').hide();
		$('.products__item').filter(activeProduct).delay(300).slideDown();
		activeProduct = '.products__filter button' + activeProduct;
		$('.products__filter button').removeClass('filter-active');
		$(activeProduct).addClass('filter-active');
	}
	
	
	$('.scrollup').click(function(){
		$('body').animate({scrollTop: 0}, 300);
		return false;
	});
	
  $('.main-slider__wrapper').slick({
		autoplay:true,
		dots:true,
		arrows:true,
		fade:true,
		speed: 500,
		cssEase: 'linear',
		autoplaySpeed:10000
  });
	
	$('.featured-products__container').slick({
		autoplay:true,
		arrows:false,
		dots:true,
		slidesToShow:4,
		slidesToScroll:4,
		autoplaySpeed:10000,
		responsive: [
			{
				breakpoint: 1280,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},            
			{
				breakpoint: 700,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
  });
	
	$('.product__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		adaptiveHeight: true,
		asNavFor: '.product__slider-nav'
	});
	
	$('.product__slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.product__slider',
		dots: true,
		centerMode: true,
		centerPadding: '60px',
		focusOnSelect: true
	});

});

{
	var myCenter=new google.maps.LatLng(54.212117, 37.646803);
	function initialize(){
	var mapProp = {
		center:myCenter,
		zoom:16,
		scrollwheel:false,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map=new google.maps.Map(document.getElementById("map"), mapProp);
	var marker=new google.maps.Marker({
		position:myCenter,
		icon:'../img/page-logo.png',
		size: new google.maps.Size(20, 32)
	});
	marker.setMap(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
};