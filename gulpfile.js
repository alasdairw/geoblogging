var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.scripts('angular/angular.js','public/vendor/js/angular.js','bower_components/');
    mix.scripts('angular-google-maps/dist/angular-google-maps.min.js','public/vendor/js/angular-google-maps.js','bower_components/');
    mix.scripts('lodash/dist/lodash.min.js','public/vendor/js/lodash.js','bower_components/');
});
