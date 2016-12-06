window.$ = window.jQuery = require('jquery');
window.Tether = require('tether');
window.Tooltip = require('tether-tooltip');
window.Drop = require('tether-drop');
require('bootstrap');

window.select2 = require('select2');
window.sr = require('scrollreveal');
window.smoothScroll = require('smooth-scroll');
window.masonry = require('masonry-layout');
//require('./vendor/wordrotate');

$('#menu li').each(function () {
    if ($(this).children('a').attr('href') == window.location.href) {
        $(this).addClass('active');
        return;
    }
});

$('.add-select2').select2();

function revealMenuOnScroll() {
	$(window).scroll(function(){
		if($(window).scrollTop() > 30){
			$("#menu-principal").addClass("navbar-fixed-top");
			$("#menu-principal ul").removeClass("hidden-xs-up");
			$("#menu-principal").css("height", (10+"vh"));
			$("#menu-principal").css("background-color", "transparent");

			$(".navbar-logo img").css("height", (100 - $(window).scrollTop()) + "vh");
    		$(".navbar-logo h1").css("opacity", 1 - $(window).scrollTop() / 250);
    		$(".navbar-logo").switchClass(".navbar-logo", ".navbar-brand");
		}
		else if($(window).scrollTop() == 0){
			$("#menu-principal").removeClass("navbar-fixed-top");
			$("#menu-principal ul").addClass("hidden-xs-up");
			$("#menu-principal").css("height", (100+"vh"));
			$("#menu-principal").css("background-color", "black");

			$(".navbar-brand img").css("height", (50+"vh"));
			$(".navbar-brand h1").css("opacity", 1);
			$(".navbar-brand").switchClass(".navbar-brand", ".navbar-logo");
		}
		
	});
}

$(document).ready(function() {
	window.onload = revealMenuOnScroll();
	smoothScroll.init();


  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 100
  });
});
