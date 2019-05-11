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

mix.js('resources/assets/js/app.js', 'public/js')
    .extract(['jquery','popper.js'])
    .styles([
        'resources/assets/sass/demo.css',
        'resources/assets/sass/themify-icons.css',
        'resources/assets/sass/ie7.css',
        'resources/assets/sass/normalize.css',
        'resources/assets/sass/weather-icons.css',
        'resources/assets/sass/fullcalendar.css',
    ],'public/css/all.css')
    .copy('resources/assets/fonts/fonts/fonts','public/fonts')
    .sass('resources/assets/sass/bootstrap/bootstrap.scss', 'public/css')
    // .sass('resources/assets/sass/style.scss', 'public/css')
    .sass('resources/assets/sass/socials.scss', 'public/css')
    // .sass('resources/assets/sass/todo-list.scss', 'public/css')
    .sass('resources/assets/sass/variables.scss', 'public/css')
    .sass('resources/assets/sass/fontawesome/scss/fontawesome.scss', 'public/css');
