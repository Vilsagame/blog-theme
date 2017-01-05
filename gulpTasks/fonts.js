/////////////////////////
/// /file gulpTask/script.js
/// /version 0.1
/// /author Cyril POIDEVIN
///
/// Define fonts's gulp's tasks
///
/////////////////////////

// Plugins
// -----------------
var gulp = require("gulp")
var imagemin = require('gulp-imagemin')

// Optimization Tasks
// ------------------
gulp.task('fonts', function(){
  return gulp.src(src + '/assets/fonts/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(dist + '/assets/fonts/'));
})
