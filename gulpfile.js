/**
 * @file Gulpfile.js
 * @version 0.1
 * @author Cyril POIDEVIN
 *
 * Gulpfile's definition
 */

/**
 * Global Plugins
 */
const { src, dest, series, parallel, watch } = require('gulp')
const imagemin = require('gulp-imagemin')
const gulpUseref = require('gulp-useref')
const plumber = require('gulp-plumber')
const sourcemaps = require('gulp-sourcemaps')
const rename = require('gulp-rename')
const eslint = require('gulp-eslint')
const uglify = require('gulp-uglify')
const babel = require('gulp-babel')
const sass = require('gulp-sass')
const csso = require('gulp-csso')
const cssbeautify = require('gulp-cssbeautify')
const csscomb = require('gulp-csscomb')
const autoprefixer = require('gulp-autoprefixer')

/**
 * Development Tasks
 */

 /**
  * Format JS
  */
function scripts () {
  return src('./assets/js/app.js')
    .pipe(plumber())
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(dest('./assets/js/'))
}

/**
 * Convert Sass to CSS
 */
function styles () {
  return src('./assets/sass/**/*.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(csscomb())
    .pipe(cssbeautify({indent: '  ', autosemicolon: true}))
    .pipe(autoprefixer())
    .pipe(dest('./assets/css/'))
}

/**
 * Watchers
 */
function watcher () {
  watch('./assets/sass/**/*.scss', { delay: 500 }, styles)
  watch('./assets/js/**/*.js', { delay: 500 }, scripts)
}

/**
 * Optimization Tasks
 */

/**
 * Minify JS
 */
function minifyScripts () {
  return src(['./assets/js/*.js', '!./assets/js/*.min.js'])
    .pipe(sourcemaps.init())
    .pipe(babel({
      presets: ['es2015']
    }))
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(sourcemaps.write())
    .pipe(dest('./assets/js/'))
}

/**
 * Minify Styles
 */
function minifyStyles () {
  return src(['./assets/css/*.css', '!./assets/css/*.min.css'])
    .pipe(sourcemaps.init())
    .pipe(csso())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(sourcemaps.write())
    .pipe(dest('./assets/css/'))
}

/**
 * Minify fonts
 */
function fonts () {
  return src('./assets/fonts/**/*')
    .pipe(imagemin())
    .pipe(dest('./assets/fonts/'))
}

/**
 * Minify images
 */
function picts () {
  return src('./assets/picts/**/*.+(png|jpg|gif|svg)')
    .pipe(imagemin())
    .pipe(dest('./assets/picts/'))
}

/**
 * Concat js and css
 */
function useref () {
  return src('./*.html')
    .pipe(gulpUseref())
    .pipe(dest('dist'))
}

// Default Task
exports.default = series(parallel(styles, scripts), watcher)

// Build Task
exports.build = parallel(minifyStyles, minifyScripts, picts, fonts, useref)
