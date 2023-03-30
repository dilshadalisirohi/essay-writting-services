const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix
    .copyDirectory('resources/front/img', 'public/img')
    .scripts([
        'resources/front/js/libs.js',
        'resources/front/js/main.js'
    ], 'public/js/scripts.js')
    .js('resources/js/admin/relatedReviewsModal.js', 'public/js/relatedReviewsModal.js')
    .js('resources/js/admin/faq.js', 'public/js/faq.js')
    .js('resources/js/admin/prosAndCons.js', 'public/js/prosAndCons.js')
    .styles('resources/front/css/style.css', 'public/css/style.css')
    .sass('resources/sass/admin.scss', 'public/css/admin.css')
    .sass('resources/sass/modal.scss', 'public/css/modal.css')
    .options({
        postCss: [
          require('autoprefixer')
        ]
    });
