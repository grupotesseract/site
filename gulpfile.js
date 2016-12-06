var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        '/../../../node_modules/normalize.css/normalize.css',
        '/../../../node_modules/tether/dist/css/tether-theme-arrows',
        '/../../../node_modules/tether-drop/dist/css/drop-theme-arrows.css',
        '/../../../node_modules/tether-tooltip/dist/css/tooltip-theme-arrows.css',
        '/../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '/../../../node_modules/font-awesome/css/font-awesome.css',
        '/../../../node_modules/animate.css/animate.css',
        '/../../../node_modules/select2/dist/css/select2.css',
        '/../../../node_modules/sweetalert2/dist/sweetalert2.min.css',
    ], 'public/css/app.css');

    mix.browserify('app.js');

    mix.scripts([
        '/../../../node_modules/masonry-layout/dist/masonry.pkgd.min.js',
        'vendor/wordrotate.js'
    ], 'public/js/tesseract.js');

    mix.sass([
    	'tesseract.scss'
    ], 'public/css/tesseract.css');

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
});
