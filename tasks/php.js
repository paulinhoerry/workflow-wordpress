module.exports = function(gulp, plugins, config) {

  plugins.browserSync = require('browser-sync').create();
  var reload = plugins.browserSync.reload;

  gulp.task('php', function() {
    gulp.src(config.sourcePhp)
      .pipe(gulp.dest(config.buildPhp))
      .pipe(reload({stream: true}));
  });

};