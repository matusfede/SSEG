var elixir = require('laravel-elixir');

require('laravel-elixir-bower');
require('laravel-elixir-angular');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    // Directorios incluidos a los resourses para compilacion
    mix.copy('bower_components/materialize/sass/', 'resources/assets/sass');
    mix.copy('bower_components/jquery/dist/jquery.js', 'resources/assets/js/jquery.js');
    mix.copy('bower_components/angular/angular.js', 'resources/assets/js/angular.js');
    mix.copy('bower_components/angular-materialize/src/angular-materialize.js', 'resources/assets/js/angular-materialize.js');
    mix.copy('bower_components/materialize/dist/js/materialize.js', 'resources/assets/js/materialize.js');

    // Compilacion de archivos sass
    mix.sass([
        'materialize.scss',
        'app.scss'
    ]);

    // Compilacion de archivos javascript
    mix.scripts([
        'jquery.js',
        'angular.js',
        'angular-materialize.js',
        'materialize.js',
        'app.js'
    ]);
});
