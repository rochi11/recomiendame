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
    .sass('resources/sass/bootstrap/bootstrap.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css')
    .sass('resources/sass/socials.scss', 'public/css')
    .sass('resources/sass/todo-list.scss', 'public/css')
    .sass('resources/sass/variables.scss', 'public/css');
