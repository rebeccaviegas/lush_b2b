module.exports = function(grunt){

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /* --- SASS --- */
        sass:{
            dev:{
                options:{
                    style:'expanded',
                    sourcemap:'none',
                },
                files:{
                    'assets/css/style.css': 'assets/css/sass/style.scss'
                }
            }
        },

        /* --- WATCH --- */
        watch:{
            css:{
                files:'**/*.scss',
                tasks: ['sass']
            }
        },
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['watch']);
}