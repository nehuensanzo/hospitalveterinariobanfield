$('#flechaderecha').click(function() {
	var currentSlide = $('.slide.active');
	var nextSlide = currentSlide.next();

	currentSlide.removeClass('active');
	nextSlide.addClass('active');

	if(nextSlide.length == 0){
		$('.slide').first().addClass('active');

	}
});


$('#flechaizquierda').click(function(){
	var currentSlide = $('.slide.active');
	var prevSlide = currentSlide.prev();

	currentSlide.removeClass('active');
	prevSlide.addClass('active');

	if(prevSlide.length == 0){
		$('.slide').last().addClass('active');

	}



});
