window.$ = window.jQuery = require('jquery');
window.Tether = require('tether');
window.Tooltip = require('tether-tooltip');
window.Drop = require('tether-drop');
require('bootstrap');

window.select2 = require('select2');
window.sr = require('scrollreveal');
window.smoothScroll = require('smooth-scroll');
window.masonry = require('masonry-layout');
require('./vendor/wordrotate');

$('#menu li').each(function () {
    if ($(this).children('a').attr('href') == window.location.href) {
        $(this).addClass('active');
        return;
    }
});

$('.add-select2').select2();

$(document).ready(function() {
	smoothScroll.init();
});
