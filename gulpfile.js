var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

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
    mix.sass('ios-app.scss').scripts(['jquery.min.js'], 'public/js/ios-main.js');

    mix.sass('tvos-app.scss').scripts(['jquery.min.js'], 'public/js/tvos-main.js');

    mix.browserify('ios-app.js');

    mix.version([
        'css/ios-app.css',
        'js/ios-main.js'
    ]);
});
