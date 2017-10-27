var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;

// Save a reference to the `reload` method

// Watch scss AND html files, doing different things with each.
gulp.task('serve', function () {

	//Variables para que sepa que archivos refrescar 
	 var files = [
    	'./style.css',
    	'./*.php',
        './template-parts/*.php',
        '**/*.js',
                '**/*.svg',
                '**/*.ttf',
                '**/*.otf',
                '**/*.eot',
                '**/*.woff',
                '**/*.woff2',

                // include specific files and folders
                'screenshot.png',
    	];

    // Serve files from the root of this project
    browserSync.init(files, {
      
             proxy: "localhost/luzaguzman/",
       
    });

        
});


gulp.task('default', ['serve']);




