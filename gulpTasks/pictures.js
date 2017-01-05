/////////////////////////
/// /file gulpTask/script.js
/// /version 0.1
/// /author Cyril POIDEVIN
///
/// Define picture's gulp's tasks
///
/////////////////////////

// Plugins
// -----------------
var gulp = require("gulp")
var imagemin = require('gulp-imagemin')

// Optimization Tasks
// ------------------
gulp.task('picts', function(){
  return gulp.src(src + '/assets/picts/**/*.+(png|jpg|gif|svg)')
    .pipe(imagemin())
    .pipe(gulp.dest(dist + '/assets/picts/'));
})
