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

/*front*/
mix.styles([
    'resources/assets/fronts/css/bootstrap.min.css',
    'resources/assets/fronts/css/font-awesome.min.css',
    'resources/assets/fronts/css/owl.carousel.css',
    'resources/assets/fronts/css/owl.theme.css',
    'resources/assets/fronts/css/owl.transitions.css',
    'resources/assets/fronts/css/nivo-slider.css',
    'resources/assets/fronts/css/meanmenu.min.css',
    'resources/assets/fronts/css/jquery-ui.css',
    'resources/assets/fronts/css/animate.css',
    'resources/assets/fronts/css/main.css',
    'resources/assets/fronts/css/style.css',
    'resources/assets/fronts/css/responsive.css'
], 'public/fronts/css/front.css')
    .scripts([
        'resources/assets/fronts/js/jquery-1.11.3.min.js',
        'resources/assets/fronts/js/bootstrap.min.js',
        'resources/assets/fronts/js/wow.min.js',
        'resources/assets/fronts/js/jquery.meanmenu.js',
        'resources/assets/fronts/js/owl.carousel.min.js',
        'resources/assets/fronts/js/jquery.scrollUp.min.js',
        'resources/assets/fronts/js/countdon.min.js',
        'resources/assets/fronts/js/jquery-price-slider.js',
        'resources/assets/fronts/js/jquery.nivo.slider.js',
        'resources/assets/fronts/js/imagezoom.js',
        'resources/assets/fronts/js/plugins.js',
        'resources/assets/fronts/js/main.js',
    ], 'public/fronts/js/front.js')
    .copyDirectory('resources/assets/fronts/img', 'public/fronts/img')
    .copyDirectory('resources/assets/fronts/fonts', 'public/fronts/fonts');
/*=====*/
/*admin*/
mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/css/tempusdominus-bootstrap-4.min.css',
    'resources/assets/admin/plugins/select2/css/select2.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
    'resources/assets/admin/css/adminlte.min.css',
], 'public/admin/css/admin.css')
    .scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.js',
    'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
    'resources/assets/admin/js/moment.min.js',
    'resources/assets/admin/js/jquery.inputmask.bundle.min.js',
    'resources/assets/admin/js/tempusdominus-bootstrap-4.min.js'
], 'public/admin/js/admin.js')
    .copyDirectory('resources/assets/admin/img', 'public/admin/img')
    .copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/admin/webfonts')
    .copy('resources/assets/admin/css/adminlte.min.css.map', 'public/admin/css/adminlte.min.css.map');

/*=====*/
