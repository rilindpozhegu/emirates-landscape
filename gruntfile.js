module.exports = function(grunt) {

	// Configure

	grunt.initConfig({
		// pass in options to pluginsm references to files etc...
		concat:{
			js:{
				// src:['js/bootstrap.min.js', 'js/jquery.js', 'js/scrolling-nav.js']
				src:[
					'js/jquery.js',
					'js/bootstrap.min.js', 
					'js/scrolling-nav.js', 
					'js/owl.carousel.js', 

					'js/waypoints.min.js',
					'js/jquery.counterup.min.js',
					'js/number-c.js',
					
					// Gallery Scripts New ONE
					'js/gallery/add_gallery.js',
					'js/gallery/lightgallery.min.js',
					'js/gallery/lg-fullscreen.min.js',
					'js/gallery/lg-thumbnail.min.js',
					'js/gallery/lg-video.min.js',
					'js/gallery/lg-autoplay.min.js',
					'js/gallery/lg-zoom.min.js',
					'js/gallery/lg-hash.min.js',
					'js/gallery/lg-pager.min.js',
					'js/gallery/jquery.mousewheel.min.js',
					// ---------------------------------//

					'js/owl_time.js',
					'js/wow.min.js',
					'js/animate.js'
					],

				dest: 'build/scripts.js'
			},
			css: {
				src:['css/**/*.css'],
				dest: 'build/styles.css'
			}
		},
		watch: {
		  scripts: {
		    files: ['css/**/*.css'],
		    tasks: ['concat'],
		    options: {
		      spawn: false,
		    },
		  },
		},

	});


	//  Load Plugins
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Register tasks

	grunt.registerTask('default', ['watch']);
	// grunt.registerTask('concat-css', ['concat:css']);


};