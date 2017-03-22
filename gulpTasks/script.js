/////////////////////////
/// /file gulpTask/script.js
/// /version 0.1
/// /author Cyril POIDEVIN
///
/// Define script's gulp's tasks
///
/////////////////////////

// Plugins
// -----------------

var gulp = require("gulp")
var plumber = require("gulp-plumber")
var sourcemaps = require('gulp-sourcemaps')
var rename = require('gulp-rename')
var eslint = require('gulp-eslint')
var uglify = require('gulp-uglify')
var babel = require('gulp-babel')

// Development Tasks
// -----------------
gulp.task('scripts', function(){
  gulp.src('./assets/js/app.js')
    .pipe(plumber())
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(gulp.dest('./assets/js/'))
})

// Optimization Tasks
// ------------------

// Minify JS
gulp.task('minify:scripts', ['scripts'], function () {
  return gulp.src(['./assets/js/*.js', '!./assets/js/*.min.js'])
    .pipe(sourcemaps.init())
    .pipe(babel({
      presets: ['es2015']
    }))
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('/assets/js/'));
})
