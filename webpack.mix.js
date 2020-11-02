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


mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery');
mix
  .js('resources/js/app.js', 'public/js')
  .js('resources/js/dashboard/user/user.js', 'public/js/dashboard/user')

  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('autoprefixer'),
  ])
    .browserSync("http://127.0.0.1:8000/")
    .sourceMaps()
    .disableSuccessNotifications()
    .version();

if (mix.inProduction()) {
  mix
    .version();
}
