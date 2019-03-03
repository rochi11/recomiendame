const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .extract(['jquery','popper.js'])
    .styles([
        'resources/sass/demo.css',
        'resources/sass/themify-icons.css',
        'resources/sass/ie7.css',
        'resources/sass/normalize.css',
        'resources/sass/weather-icons.css',
        'resources/sass/fullcalendar.css',
    ],'public/css/all.css')
    .copy('resources/fonts/fonts/fonts','public/fonts')
    .sass('resources/sass/bootstrap/bootstrap.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css')
    .sass('resources/sass/socials.scss', 'public/css')
    .sass('resources/sass/todo-list.scss', 'public/css')
    .sass('resources/sass/variables.scss', 'public/css')
    .sass('resources/sass/fontawesome/scss/fontawesome.scss', 'public/css');
