const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.version();

mix
    .js('resources/js/common.js', 'public/js')
    .sass('resources/css/common.scss', 'public/css')
    .js('resources/js/packages-iframe.js','public/js/packages-iframe.min.js')
    .sass('resources/sass/bingsport_v2/common.scss', 'public/css/bingsport_v2/common.min.css');
