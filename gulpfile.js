var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var plumber = require('gulp-plumber');
var notify = require("gulp-notify");
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssdeclsort = require('css-declaration-sorter');
var mqpacker = require('css-mqpacker');

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
    .pipe(plumber({errorHandler: notify.onError("Error:<%= error.message %>")}))
    .pipe(sassGlob())
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(postcss([mqpacker()]))
    .pipe(postcss([cssdeclsort({order: 'alphabetical'})]))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('./css'));
});

gulp.task( 'default', function() {
    gulp.watch( './sass/**/*.scss', gulp.task('sass')); 
});