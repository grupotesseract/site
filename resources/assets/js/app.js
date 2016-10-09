window.$ = window.jQuery= require('jquery');
require('bootstrap');
window.select2 = require('select2');
require('./vendor/wordrotate');


$('#menu li').each(function () {
    if ($(this).children('a').attr('href') == window.location.href) {
        $(this).addClass('active');
        return;
    }
});

$('.add-select2-tags').select2({
  tags: true
});