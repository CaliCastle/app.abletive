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
    mix.sass('ios-app.scss').scripts(['jquery.min.js','ios-main.js'], 'public/js/ios-main.js');

    mix.version([
        'css/ios-app.css',
        'js/ios-main.js'
    ]);
});
