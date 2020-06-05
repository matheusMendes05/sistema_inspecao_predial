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

mix.styles([
    'resources/views/Web/css/style.css'
], 'public/Web/css/style.css')
    .scripts([
        'resources/views/Web/js/checkEngineer.js'
    ], 'public/Web/js/checkEngineer.js')
    .scripts([
        'resources/views/Web/js/setLocation.js'
    ], 'public/Web/js/setLocation.js')
    .scripts([
        'resources/views/Web/js/getLocation.js'
    ], 'public/Web/js/getLocation.js')
    .scripts([
        'resources/views/Web/js/estruturas.js'
    ], 'public/Web/js/estruturas.js')
    .version();