var elixir = require('laravel-elixir');

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
    //mix.copy('bower_components/materialize/sass/materialize.scss', 'resources/assets/sass/materialize.scss');
    mix.sass([
        '../../../bower_components/materialize/sass/materialize.scss',
        'app.scss'
    ]);
    mix.scripts([
        '../../../bower_components/jquery/dist/jquery.js',
        '../../../bower_components/angular/angular.js',
        '../../../bower_components/angular-materialize/src/angular-materialize.js',
        '../../../bower_components/materialize/dist/js/materialize.js',
        'app.js'
    ]);
});
