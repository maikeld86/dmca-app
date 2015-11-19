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
    // in video wordt verwezen naar recources/css maar in laravel 5 is dit resources/assets/css om dit werkend te krijgen
    mix.sass('app.scss', 'resources/assets/css');

    mix.styles([
        'libs/bootstrap.min.css',
        'app.css',
        'libs/select2.min.css'
    ]);

    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js',

    ]);

});
