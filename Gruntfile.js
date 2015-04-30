module.exports = function(grunt) {

	// PROJECT CONFIG
	// 
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		clean: {
			css: ['assets/css'],
			js : ['assets/js/build'],
			dev: ['assets/css','assets/js/build'],
		},
		uglify: {
			options: {
				mangle: false,
				compress: false,
				beautify: false,
			},
			default: {
				files: [{
					expand: true,
					cwd: 'assets/js',
					src: '**/*.js',
					dest: 'assets/js/build'
				}]
			}
		},
		concat: {
			options: {
				separator: '',
			},
			dev: {
				src: [
					'assets/js/build/modernizr.js',
					'assets/js/build/jquery.js',
					'assets/js/build/lib/*.js',
					'assets/js/build/config/*.js',
					'assets/js/build/main.js',
					'assets/js/build/post/*.js',
				],
				dest: 'assets/js/build/main.js',
			},
		},
		sass: {
			dev: {
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
			js: {
				files: ['assets/js/**/*.js','!assets/js/build/**/*.js'],
				tasks: ['clean:js','newer:uglify','concat:dev'],
			},
			css: {
				files: ['assets/scss/**/*.scss'],
				tasks: ['clean:css','newer:sass:dev','newer:autoprefixer'],
			},
			dev: {
				files: ['assets/js/**/*.js','!assets/js/build/**/*.js','assets/scss/**/*.scss'],
				tasks: ['newer:clean','newer:sass:dev','newer:autoprefixer','newer:uglify','concat:dev'],
			}
		},
		concurrent: {
			dev: ['watch:css','watch:js'] ,
            options: {
                logConcurrentOutput: true,
            }
		}
	});

	// LOAD PLUGINS
	// 
	grunt.loadNpmTasks('grunt-newer');
	grunt.loadNpmTasks('grunt-concurrent');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-concat');

	// TASK SETUP
	// 
	grunt.registerTask('default', ['clean','uglify','concat','sass:dev','autoprefixer']);
	grunt.registerTask('dev', ['watch:dev']);
	grunt.registerTask('cnc', ['concurrent']);

	grunt.registerTask('push', ['ftpush']);

};