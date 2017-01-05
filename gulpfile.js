/////////////////////////
/// /file Gulpfile.js
/// /version 0.1
/// /author Cyril POIDEVIN
///
/// Gulpfile's definition
///
/////////////////////////

// Plugins
// -------

// Global Plugins
var gulp = require("gulp")
var useref = require('gulp-useref')
var runSequence = require('run-sequence')
var requireDir = require('require-dir')

requireDir('./gulpTasks')

// Development Tasks
// -----------------

// Watchers
gulp.task('watch', function(){
  gulp.watch("./assets/sass/**/*.scss", ["styles"]);
  gulp.watch("./assets/js/**/*.js", ["scripts"]);
})

// Optimization Tasks
// ------------------

// Concat js and css
gulp.task('useref', function(){
  return gulp.src('./*.html')
    .pipe(useref())
    .pipe(gulp.dest(dist))
})

// Build Sequences
// ---------------

// Default Task
gulp.task("default", function(callback) {
  runSequence(
    ["styles", "scripts"],
    ["watch"],
    callback
  )
})

// Build Task
gulp.task("build", function(callback) {
  runSequence(
    ['minify:styles', 'minify:scripts', 'picts', 'fonts', 'useref'],
    callback
    )
})
