const mix = require('laravel-mix');

const DEV_DOMAIN = 'clickymediatest.local';
const THEME_DIRECTORY = 'clickymediagaryjackson';

  mix.combine([
    'library/js/libs/**.js',
    'library/js/app.js'
  ], 'dist/scripts.min.js');
  mix.sass('library/scss/style.scss', 'dist/')
  .sourceMaps(mix.inProduction(), 'source-map')
  mix.options({ processCssUrls: false })

  .browserSync({
    watchOptions: {
        ignored: /node_modules/
      },
    open: false,
    proxy: DEV_DOMAIN,
    files: ['dist/style.css','**/*.php'],
  })
