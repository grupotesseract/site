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
        '/../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '/../../../node_modules/font-awesome/css/font-awesome.css',
        '/../../../node_modules/select2/dist/css/select2.css',
      ], 'public/css/all.css');

    mix.browserify('app.js');

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
});
