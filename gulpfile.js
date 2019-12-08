// require gulp
var gulp = require('gulp');
// require other packages
var concat = require('gulp-concat');
var rename = require("gulp-rename");
var terser = require('gulp-terser');

var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');

function script() {
    return (
        gulp
            .src(
                [
                    './node_modules/jquery/dist/jquery.min.js',
                    './node_modules/popper.js/dist/umd/popper.min.js',
                    './node_modules/bootstrap/dist/js/bootstrap.min.js',
                    './node_modules/@fortawesome/fontawesome-free/js/all.min.js',
                    './wp-content/themes/theme-negocio/assets/js/scripts.js'
                ]
            )
            .pipe(concat('theme-negocio.js'))
            .pipe(gulp.dest('./wp-content/themes/theme-negocio/assets/'))
            .pipe(terser())
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(gulp.dest('./wp-content/themes/theme-negocio/assets/'))

    );
}
function style() {
    return (

        gulp
            .src(
                [
                    './node_modules/bootstrap/dist/css/bootstrap.min.css',
                    './node_modules/@fortawesome/fontawesome-free/css/all.min.css',
                    './node_modules/animate.css/animate.min.css',
                    './wp-content/themes/theme-negocio/assets/scss/application.scss'
                ])
            .pipe(concat('theme-negocio.scss'))
            .pipe(gulp.dest('./wp-content/themes/theme-negocio/assets/scss'))
            .pipe(sass())
            .pipe(autoprefixer({
                cascade: false
            }))
            .pipe(cssnano())
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(gulp.dest('./wp-content/themes/theme-negocio/assets/scss'))

    );
}

function watch() {
    gulp.watch('./wp-content/themes/theme-negocio/assets/js/*.js', script)
    gulp.watch('./wp-content/themes/theme-negocio/assets/scss/*.scss', style)
}

exports.watch = watch
exports.style = style
exports.script = script;