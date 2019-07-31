const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix proporciona una API limpia y fluida para definir algunos pasos de compilación de Webpack
 | para su aplicación Laravel. Por defecto, estamos compilando el Sass
 | archivo para la aplicación, así como agrupar todos los archivos JS.
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
