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
            'font-awesome.min.css',
            'footer-distributed-with-address-and-phones.css'

        ], './public/css/libs.css')

        .scripts([
            'jquery-3.1.1.min.js',
            'bootstrap.min.js'
        ], './public/js/libs.js')

        .sass([
            '_bordered-pulled.scss',
            '_core.scss',
            '_fixed-width.scss',
            '_icons.scss',
            '_larger.scss',
            '_list.scss',
            '_mixins.scss',
            '_path.scss',
            '_rotated-flipped.scss',
            '_spinning.scss',
            '_stacked.scss',
            '_variables.scss',
            'font-awesome.scss'
        ],'./public/sass/libs.scss')


});
