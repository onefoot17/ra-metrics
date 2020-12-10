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

mix.js( 'resources/js/app.js', 'public/assets/js' )
    .postCss( 'resources/css/app.css', 'public/assets/css', [
        require( 'postcss-import' ),
        require( 'tailwindcss' ),
    ])
    .webpackConfig( require( './webpack.config' ) )
    .sourceMaps();;

// Admin
mix.sass( 'resources/sass/admin.scss', 'public/admin/assets/css', {
        // data: '$appUrl:\'' + process.env.APP_URL + '\';'
    })
    .options({
        /* autoprefixer: {
            options: {
                browsers: [
                    'last 6 versions',
                ]
            }
        }, */
        postCss: [
            require( 'postcss-css-variables' ) ()
        ]
    })
    .sourceMaps();

// Frontend
mix.sass( 'resources/sass/frontend.scss', 'public/website/assets/css' )
    .options({
        /* autoprefixer: {
            options: {
                browsers: [
                    'last 6 versions',
                ]
            }
        }, */
        postCss: [
            require( 'postcss-css-variables' ) ()
        ]
    })
    .sourceMaps();

mix.browserSync( process.env.APP_URL );
