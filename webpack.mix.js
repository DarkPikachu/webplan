let mix = require('laravel-mix');

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
    .js('resources/assets/js/about_us.js', 'public/js')
    .js('resources/assets/js/org_chart.js', 'public/js')
    .js('resources/assets/js/personnel.js', 'public/js')
    .js('resources/assets/js/gallery.js', 'public/js')
    .js('resources/assets/js/gallery_view_album.js', 'public/js')
    .js('resources/assets/js/circular.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/font-awesome/fonts/', 'public/fonts')
    .sass('node_modules/font-awesome/scss/font-awesome.scss', 'public/css')
    .version();