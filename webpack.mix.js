const mix = require('laravel-mix');
// require('mix-white-sass-icons');

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

// if(process.env.BUILD_ICONS) {
//    return mix.icons('ressources/icons', 'ressources/fonts')
// }

mix.sass('wp-content/themes/portfolio/ressources/sass/site.scss', 'wp-content/themes/portfolio/public/css');
mix.sass('wp-content/themes/portfolio/ressources/sass/other/contact.scss', 'wp-content/themes/portfolio/public/css/contact.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/other/projets.scss', 'wp-content/themes/portfolio/public/css/projets.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/other/mentions-legales.scss', 'wp-content/themes/portfolio/public/css/mentions-legales.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/other/search.scss', 'wp-content/themes/portfolio/public/css/search.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/other/404.scss', 'wp-content/themes/portfolio/public/css/404.css');
mix.js('wp-content/themes/portfolio/ressources/js/site.js', 'wp-content/themes/portfolio/public/js');
mix.js('wp-content/themes/portfolio/ressources/js/projets.js', 'wp-content/themes/portfolio/public/js/projets.js');
mix.js('wp-content/themes/portfolio/ressources/js/form.js', 'wp-content/themes/portfolio/public/js/form.js');