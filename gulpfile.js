// grab all our packages
var gulp = require('gulp'),
    php = require('gulp-connect-php');

// create a task to serve the app
gulp.task('serve', function() {

    // start the php server
    // make sure we use the public directory since this is Laravel
    php.server({
        base: './'
    });

});

gulp.task('default', ['serve']);
