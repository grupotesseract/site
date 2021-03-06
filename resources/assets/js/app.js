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

function revelaMenuOnScroll() 
{
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

function trocaBGSlideHome()
{
    var elemento = $("#intro .cd-intro"),
    	bgs = [
	      'url(../img/jpg/background/bg01.jpg)',
	      'url(../img/jpg/background/bg02.jpg)',
	      'url(../img/jpg/background/bg03.jpg)',
	      'url(../img/jpg/background/bg04.jpg)', 
	      'url(../img/jpg/background/bg05.jpg)'],
      	atual = 0;

    function proximoBG() {
        elemento.css(
            'background',
        bgs[atual = ++atual % bgs.length]);

        setTimeout(proximoBG, 15000);
    }
    setTimeout(proximoBG, 15000);
    elemento.css('background', bgs[0]);
}

$('#menu li').each(function () {
    if ($(this).children('a').attr('href') == window.location.href) {
        $(this).addClass('active');
        return;
    }
});

function matchStart (term, text) {
  if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
    return true;
  }

  return false;
}



$(document).ready(function() {

  /** Dando play no Select2 **/
  $('.add-select2').select2({
    theme: 'classic',
    tags: true,
    tokenSeparators: [',']
  });

	window.onload = revelaMenuOnScroll();
	trocaBGSlideHome();
	smoothScroll.init();

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 80,
    gutter: 5
  });

});
