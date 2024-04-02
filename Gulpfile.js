'use strict';

var gulp = require('gulp');
var loadPlugins  = require('gulp-load-plugins')();
var browserSync  = require('browser-sync').create();


gulp.task('servers', function() {
	browserSync.init({
		server: {
			baseDir: "./build"
		}
	});
});


gulp.task('html',function(){
	return gulp.src('dist/*.html')
		.pipe(gulp.dest('build/'))
		.on('end', browserSync.reload);
});

gulp.task('css',function(){
	return gulp.src('dist/css/*.css')
		.pipe(gulp.dest('build/css'))
		.pipe(browserSync.stream());
});

gulp.task('js',function(){
	return gulp.src('dist/js/*.js')
		.pipe(gulp.dest('build/js'))
		.on('end', browserSync.reload);
});


gulp.task('fonts',function(){
	return gulp.src('dist/fonts/*')
		.pipe(gulp.dest('build/fonts/'))
		.on('end', browserSync.reload);
});



gulp.task('img',function(){
	return gulp.src('dist/images/*.{png,jpg,gif,svg}')
		.pipe(gulp.dest('build/images'));
});



gulp.task('watch', function(){
	gulp.watch('dist/*.html', gulp.series('html'));
	gulp.watch('dist/css/*.css', gulp.series('css'));
	gulp.watch('dist/js/*.js', gulp.series('js'));
	gulp.watch('dist/fonts/', gulp.series('fonts'));
	gulp.watch('dist/images/*.{png,jpg,gif,svg}', gulp.series('img'));
});


gulp.task('default', gulp.series(
	gulp.parallel('html', 'css', 'js', 'img', 'fonts'),
	gulp.parallel('watch', 'servers')
));
