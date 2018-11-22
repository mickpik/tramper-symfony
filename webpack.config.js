var Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .cleanupOutputBeforeBuild()
  .autoProvidejQuery()
  .enableSassLoader()
  .enableVersioning()
  .addEntry('js/app', './assets/js/app.js')
  .addStyleEntry('css/app', ['./assets/scss/app.scss'])
  .splitEntryChunks()
  .disableSingleRuntimeChunk()
;

module.exports = Encore.getWebpackConfig();