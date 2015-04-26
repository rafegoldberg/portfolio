module.exports = function(grunt) {

	// PROJECT CONFIG
	// 
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		clean: ['assets/css','assets/scripts/min'],
		uglify: {
			default: {
				files: [{
					expand: true,
					cwd: 'assets/scripts',
					src: '**/*.js',
					dest: 'assets/scripts/min'
				}]
			}
		},
		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: [{
					expand: true,
					cwd: 'assets/scss',
					src: ['*.scss'],
					dest: 'assets/css',
					ext: '.css'
				}]
			}
		},
		autoprefixer: {
			options: {
				map: {
					prev  : 'assets/css',
					inline: false,
				},
			},
			default: {
				src:  'assets/css/*.css'
			},
		},
		watch: {
			options: {
				livereload: true,
			},
			default: {
				files: ['assets/scripts/*.js','assets/scss/**/*.scss'],
				tasks: ['clean','uglify','sass','autoprefixer'],
			}
		}
	});

	// LOAD PLUGINS
	// 
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// TASK SETUP
	// 
	grunt.registerTask('default', []);
	grunt.registerTask('dev', ['watch']);

};