$(function() {
    if ( $(this).scrollTop() > 0){
       $('.header').addClass('fixed');
    } else {
          $('.header').removeClass('fixed');
    }
$(window).scroll(function(){
    if ( $(this).scrollTop() > 0){
       $('.header').addClass('fixed');
    } else {
          $('.header').removeClass('fixed');
    }
 });


if($(window).width() > 991){
   var carousel = $(".wrapper-slider-results").waterwheelCarousel();

 $('#carousel-left').bind('click', function () {
    carousel.prev();
    return false
  });

  $('#carousel-right').bind('click', function () {
    carousel.next();
    return false;
  });
} else {
	$('.top-menu li.menu-item-has-children').on('click', function(){
		$(this).children('.sub-menu').toggleClass('active-mobile-menu');
	});
  $('.wrapper-slider-results').slick({
      dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    centerMode: true,
    prevArrow: $('#carousel-left'),
    nextArrow: $('#carousel-right'),
   variableWidth: true
  });
}

if($(window).width() < 768){
  $('.blog__global-wrapper').slick({
    dots: true,
    slidesToShow: 1,
    arrows: false,
  });
}

	
	
//  style="display: block; width: 17px; position: absolute; right: -40px; top: 40%;"
if($('.reviews__slider').length > 0) {
	$('.reviews__slider').slick({
		dots: false,
		 infinite: true,
		 speed: 300,
		 slidesToShow: 1,
		 slidesToScroll: 1,
		 centerMode: true,
		 adaptiveHeight: true,
		 arrows: true,
		 nextArrow: `<img style="display: block; width: 90px; min-width: 90px; position: absolute; right: -40px; top: 40%;" id="carousel-right" src="http://test.elite-mebel.kiev.ua/wp-content/themes/seller-insiders/assets/images/homepage/hp-arrow-right.png">`,
		 prevArrow: `<img style="display: block; width: 90px; min-width: 90px; position: absolute; left: -40px; top: 40%;" id="carousel-left" src="http://test.elite-mebel.kiev.ua/wp-content/themes/seller-insiders/assets/images/homepage/hp-arrow.png">`
   });
}





let burger = document.querySelector('.mobile-burger');
burger.addEventListener('click', function() {
	document.body.classList.toggle('active');
});
let form = document.querySelector('.modal-recall form');
let closeModal = document.querySelector('.modal-recall');
let buttonAction = document.querySelectorAll('.open-modal');

for(let i = 0; i < buttonAction.length; i++){
	buttonAction[i].addEventListener('click', function(){
		document.body.classList.add('modal-active');
		document.body.classList.remove('active');
	});
}
form.addEventListener('click', function(e){
	e.stopPropagation();
})
closeModal.addEventListener('click', function(e){
	e.stopPropagation();
	document.body.classList.remove('modal-active');
});

  

});