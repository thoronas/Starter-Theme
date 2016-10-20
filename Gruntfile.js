module.exports = function(grunt){

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'style.css': 'sass/style.scss',
				}
			}
		},
		autoprefixer: {
			single_file: {
				src: 'sass/style.css',
				dest: 'style.css'
			}
        },
		watch: {

			css: {
				files: ['sass/**/*.scss'],
				tasks: ['sass','notify'],
			}
		},
		notify: {
			watch: {
				options: {
					title: 'Complie Complete',  // optional
					message: 'SASS finished running', //required
				}
			}
		}
    });


	// Plugins
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-notify');


    grunt.registerTask('default', ['sass', 'watch','notify']);

};
