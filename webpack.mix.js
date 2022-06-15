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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sass('resources/scss/styles.scss','public/css')
    .sass('resources/scss/home.scss','public/css')
    .sass('resources/scss/about.scss','public/css')
    .sass('resources/scss/offers.scss','public/css')
    .sass('resources/scss/dining.scss','public/css')
    .sass('resources/scss/meeting.scss','public/css')
    .sass('resources/scss/services.scss','public/css')
    .sass('resources/scss/contact.scss','public/css')
    .sass('resources/scss/gallery.scss','public/css')
    .sass('resources/scss/bedinfo.scss','public/css')
    .js('resources/js/homecarousel.js','public/js');

