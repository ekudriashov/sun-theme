jQuery(document).ready(function($) {
	// autohide navigation
	$(".headroom").headroom({
		"tolerance"    : 20,
		"offset"       : 80,
		"classes": {
			"initial"   : "animated",
			"pinned"    : "slideDown",
			"unpinned"  : "slideUp"
		}
	});
	$(window).scroll(function(){
		if ($(this).scrollTop() >  140 ){
			$('.headroom').removeClass("ontop-now");
			$('.navbar-dual').removeClass("navbar-inverse");
		} else {
			$('.headroom').addClass("ontop-now");
			$('.navbar-dual').addClass("navbar-inverse");
		}
	});
});