var gulp        = require('gulp'),
    scss        = require('gulp-sass'),
    path        = require('path'),
    rename      = require('gulp-rename'),
    cleanCSS    = require('gulp-clean-css'),
    jshint      = require('gulp-jshint'),
    notify      = require('gulp-notify'),
    uglify      = require('gulp-uglify');
    concat      = require('gulp-concat');  


gulp.task('scss', function () {
  return gulp.src('styles.scss')
    .pipe(scss({
      paths: [ path.join(__dirname, '', 'includes') ]
    }))
    .on('error', notify.onError(function (error) {
        return 'SCSS compilation failed: ' + error.message;
    }))
    .pipe(cleanCSS())
    .on('error', notify.onError(function (error) {
        return 'CSS minification failed: ' + error.message;
    }))
    .pipe(rename("styles.min.css"))
    .pipe(gulp.dest('dist/'))
    .pipe(notify('Stylehseets compiled successfully!'));
});

gulp.task('scripts', function(){
    return gulp.src(['js/jquery.min.js','js/js.cookie.js','js/app.js'])
    .pipe(concat({ path: 'app.js', stat: { mode: 0666 }}))
    .pipe(gulp.dest('dist/js'));
});

gulp.task('default', function(callback) {
    gulp.watch('*.scss', ['scss']);
    gulp.watch('js/app.js', ['scripts']);
});
