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

const tailwindcss = require('tailwindcss')

mix.sass('resources/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('tailwind.config.js') ],
})

mix.styles([
    'public/css/styles_lambda.css'
], 'public/css/all.css');

mix.styles([
    'public/css/styles-admin.css'
], 'public/css/all-admin.css');

mix.styles([
    'public/css/styles-examen.css'
], 'public/css/all-examen.css');

mix.styles([
    'public/css/styles-verificate-email.css'
], 'public/css/all-verificate-email.css');
