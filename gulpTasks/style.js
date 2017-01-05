/////////////////////////
/// /file gulpTask/script.js
/// /version 0.1
/// /author Cyril POIDEVIN
///
/// Define style's gulp's tasks
///
/////////////////////////

// Plugins
// -------
var gulp = require("gulp")
var plumber = require("gulp-plumber")
var rename = require('gulp-rename')
var sourcemaps = require('gulp-sourcemaps')
var sass = require("gulp-sass")
var csso = require("gulp-csso")
var cssbeautify = require('gulp-cssbeautify')
var csscomb = require('gulp-csscomb')
var autoprefixer = require('gulp-autoprefixer')
var rename = require('gulp-rename')

// Development Tasks
// -----------------
gulp.task("styles", function(){
  gulp.src('./assets/sass/**/*.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(csscomb())
    .pipe(cssbeautify({indent: '  ', autosemicolon: true}))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./assets/css/'))
})

// Optimization Tasks
// ------------------
gulp.task('minify:styles', ['styles'], function () {
  return gulp.src(['./assets/css/*.css', '!./assets/css/*.min.css'])
    .pipe(sourcemaps.init())
    .pipe(csso())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css/'));
})
