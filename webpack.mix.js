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
    .sass('resources/sass/app.scss', 'public/css');

    mix.scripts('resources/js/datatable.js','public/js/datatable.js');
    mix.scripts('resources/js/table.js','public/js/table.js');
    mix.styles('resources/css/datatable.css','public/css/datatable.css');
