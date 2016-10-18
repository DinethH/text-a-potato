var gulp = require( "gulp" );
var htmlAutoprefixer = require( "html-autoprefixer" );

gulp.task( "html-autoprefix", function( ) {
  return gulp.src( "./index.html" )
    .pipe( htmlAutoprefixer( ) )
    .pipe( gulp.dest( "dist" ) );
});

gulp.task('default', function() {
  return gulp.src( "./index.html" )
    .pipe( htmlAutoprefixer( ) )
    .pipe( gulp.dest( "dist" ) );
});
