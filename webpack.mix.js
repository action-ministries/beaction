let mix = require('laravel-mix');

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
mix.js('resources/assets/church/js/app.js', 'public/church/js')
    .js('resources/assets/ministry/js/app.js', 'public/ministry/js')
    .sass('resources/assets/church/sass/app.scss', 'public/church/css')
    .sass('resources/assets/ministry/sass/app.scss', 'public/ministry/css')
    .sass('resources/assets/admin/sass/app.scss', 'public/admin/css')
    .version();

mix.copy('resources/assets/church/img/**/*', 'public/church/img/', false)
    .copy('resources/assets/church/fonts/*', 'public/church/fonts', false);

// mix.js('resources/assets/ministry/js/app.js', 'public/ministry/js')
//     .sass('resources/assets/ministry/sass/app.scss', 'public/ministry/css')
//     .version();
//
// mix.copy('resources/assets/ministry/videos/*', 'public/ministry/videos', false);
// mix.copy('resources/assets/ministry/img/*', 'public/ministry/img/', false)
//     .copy('resources/assets/ministry/fonts/*', 'public/ministry/fonts/', false);