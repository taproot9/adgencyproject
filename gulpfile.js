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
    mix.sass('app.scss')

    .styles([
        'bootstrap.min.css',
        'demo.css',
        'footer-distributed-with-address-and-phones.css'
    ], './public/css/libs.css')

        .scripts([
        'bootstrap.min.js',
        'bootstrap.min.js'
    ], './public/js/libs.js')
});
