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

    // Convert Sass to CSS
    mix.sass('app.scss', 'resources/assets/css');

    // Merge Stylesheets
    mix.styles([
        'libs/font-awesome.min.css',
        'libs/bootstrap.min.css',
        'libs/select2.min.css',
        'app.css'
    ]);

    // Cache Busting
    mix.version('public/css/all.css');
});
