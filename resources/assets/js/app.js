// jQuery [https://github.com/jquery/jquery]
window.$ = window.jQuery = require('jquery');

// Tether [https://github.com/HubSpot/tether]
window.Tether = require('tether');

// Tooltip [https://github.com/HubSpot/tooltip]
window.Tooltip = require('tether-tooltip');

// Drop [https://github.com/HubSpot/drop]
window.Drop = require('tether-drop');

// Boostrap [https://v4-alpha.getbootstrap.com]
require('bootstrap');

// Smooth-Scroll [https://github.com/cferdinandi/smooth-scroll]
window.smoothScroll = require('smooth-scroll');

// Select2 [https://github.com/select2/select2]
window.select2 = require('select2');

// ScrollReveal [https://github.com/jlmakes/scrollreveal]
window.sr = require('scrollreveal');

// Masonry [https://github.com/desandro/masonry]
// require('masonry-layout');


// Pace [https://github.com/HubSpot/pace]
window.pace = require('pace');

// SweetAlert 2 [https://github.com/limonte/sweetalert2]
window.swal = require('sweetalert2');


$('#menu li').each(function () {
    if ($(this).children('a').attr('href') == window.location.href) {
        $(this).addClass('active');
        return;
    }
});

$('.add-select2').select2();

function revealMenuOnScroll() {
	$(window).scroll(function(){
		if($(window).scrollTop() > 1){
			$("#menu-principal").addClass("navbar-fixed-top");
			$("#menu-principal ul").removeClass("hidden-xs-up");
			$("#menu-principal").css("height", (10+"vh"));
			$("#menu-principal").css("background-color", "transparent");

			$(".navbar-logo img").css("height", (100 - $(window).scrollTop()) + "vh");
    		$(".navbar-logo h1").css("opacity", 1 - $(window).scrollTop() / 250);
    		$(".navbar-logo").toggleClass(".navbar-logo .navbar-brand");
		}
		else if($(window).scrollTop() == 0){
			$("#menu-principal").removeClass("navbar-fixed-top");
			$("#menu-principal ul").addClass("hidden-xs-up");
			$("#menu-principal").css("height", (100+"vh"));
			$("#menu-principal").css("background-color", "black");

			$(".navbar-brand img").css("height", (50+"vh"));
			$(".navbar-brand h1").css("opacity", 1);
			$(".navbar-brand").toggleClass(".navbar-brand .navbar-logo");
		}

	});
}

$(document).ready(function() {
	window.onload = revealMenuOnScroll();
	smoothScroll.init();

  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 80
  });

});
