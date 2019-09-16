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

// mix.react('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
mix.copyDirectory("resources/assets/vendor/fonts","public/fonts");
mix.copyDirectory("resources/assets/vendor/font-awesome/fonts","public/fonts");
mix.sass("resources/assets/sass/style.scss","public/css/app.css")
mix.styles([
        "resources/assets/css/bootstrap.css",
        "resources/assets/css/animate.css",
        "resources/assets/vendor/font-awesome/css/font-awesome.css"
],"public/css/vendor.css","./");

mix.scripts([
    "resources/assets/js/jquery-3.1.1.min.js",
    "resources/assets/js/popper.min.js",
    "resources/assets/js/bootstrap.js",
    "resources/assets/js/plugins/metisMenu/jquery.metisMenu.js",
    "resources/assets/js/plugins/slimscroll/jquery.slimscroll.js",
    "resources/assets/js/plugins/pace/pace.min.js",
    "resources/assets/js/inspinia.js"
],'public/js/app.js','./');

