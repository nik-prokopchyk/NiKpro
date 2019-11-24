$(document).ready(function() {
	$('#slider').carousel({
		interval: 2000,
		pause: 'hover'	
	});
	// $('#slider').css({'display': 'none'})
})
// alert('test')
function normalizeSlideHeights() {
	$('.carousel').each(function() {
		let items = $('.carousel-item', this);
		items.css('min-height', 0);
		var maxHeight = Math.max.apply(null, 
          items.map(function(){
              return $(this).outerHeight()}).get() );
      items.css('min-height', maxHeight + 'px');
	})
}
$(window).on(
    'load resize orientationchange', 
    normalizeSlideHeights);
function buy() {
	alert('Здесь покупка');
}

// beats
jQuery.createEventCapturing(['play']);  
jQuery('body').on('play', 'audio', function(){
	$('.block-beat video').get(0).play()
	console.log('play')
});
jQuery('body').on('pause', 'audio', function(){
	$('.block-beat video').get(0).pause()
	console.log('stop')
});

















// method
