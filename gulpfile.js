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

    /*
     |--------------------------------------------------------------------------
     | Mixing Styles
     |--------------------------------------------------------------------------
     |
     */

    /*
     * Converting Sass to CSS
     */
    mix.sass('app.scss', 'resources/assets/css');

    /*
     * Merging Stylesheets
     */
    mix.styles([
        //'libs/font-awesome.min.css',
        //'libs/bootstrap.min.css',
        //'libs/select2.min.css',
        '../../../vendor/fortawesome/font-awesome/css/font-awesome.min.css',
        '../../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css',
        '../../../vendor/select2/select2/dist/css/select2.min.css',
        'app.css'
    ]);

    mix.copy('vendor/fortawesome/font-awesome/fonts', 'public/build/fonts');


    /*
     |--------------------------------------------------------------------------
     | Mixing Scripts
     |--------------------------------------------------------------------------
     |
     */

    /*
     * Merging Scripts
     */
    mix.scripts([
        'libs/jquery.js',
        'libs/jquery-ui.js',
        'libs/select2.min.js',
        'app.js'
    ]);


    /*
     |--------------------------------------------------------------------------
     | Cache Busting
     |--------------------------------------------------------------------------
     |
     */
    mix.version([
        'public/css/all.css',
        'public/js/all.js'
    ]);
});
