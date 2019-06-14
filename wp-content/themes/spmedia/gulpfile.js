const gulp = require('gulp');
const sass = require('gulp-sass');

var sassFiles = 'scss/*.scss';
var cssDest = './';

function style() {
	return gulp.src(sassFiles)
		.pipe(sass().on('error',sass.logError))
		.pipe(gulp.dest(cssDest));
}

function watch() {
	gulp.watch(sassFiles, style);
	gulp.watch('./*.html');
	gulp.watch('./js/*.js');
}

exports.style = style;
exports.watch = watch;