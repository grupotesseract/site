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

// Pace [https://github.com/HubSpot/pace]
window.pace = require('pace');

// SweetAlert 2 [https://github.com/limonte/sweetalert2]
window.swal = require('sweetalert2');

function revealMenuOnScroll() {
	$(window).scroll(function(){
		if($(window).scrollTop() === 0){
			$("#menu-principal").removeClass("bg-preto");
			$("#menu-principal").addClass("bg-transparente");
		}
		if($(window).scrollTop() > 1){
			$("#menu-principal").removeClass("bg-transparente");
			$("#menu-principal").addClass("bg-preto");
		}
	});
}

$('#menu li').each(function () {
    if ($(this).children('a').attr('href') == window.location.href) {
        $(this).addClass('active');
        return;
    }
});

$('.add-select2').select2();

$(document).ready(function() {
	window.onload = revealMenuOnScroll();
	smoothScroll.init();

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 80,
    gutter: 5
  });

});
