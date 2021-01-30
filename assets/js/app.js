$(document).ready(function() {
	$('a[href^="http://"], a[href^="https://"]').filter(function() {return this.hostname && this.hostname !== location.hostname;}).attr('target', '_blank').addClass('external');

});

$(document).ready(function() {
var offset = 800;
	var duration = 500;
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset) {
			jQuery('.scroll-to-top').fadeIn(duration);
		} else {
			jQuery('.scroll-to-top').fadeOut(duration);
		}
	});
	
	jQuery('.scroll-to-top').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, duration);
		return false;
	})
});