const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss'); /* Add this line at the top */

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
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [ tailwindcss() ],
    })
    .version()
    .browserSync('127.0.0.1:8000');
