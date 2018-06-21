let mix = require('laravel-mix');

mix.ts('resources/assets/ts/app.ts', 'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css');
