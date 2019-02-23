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

mix.scripts([
      'resources/js/vue.js',
      'resources/js/axios.js',
      'resources/js/app.js',
   ],'public/js/app.js')
   .styles([
      'resources/css/bootstrap.css',
      'resources/css/toastr.css',
      'resources/css/login.css',
   ],'public/css/app.css')
   .sass('resources/sass/app.scss',
      'public/sass/app.scss');
