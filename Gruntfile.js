module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    emberTemplates: {
        options: {
            templateBasePath: "src/Birke/NvcBundle/Resources/scripts/templates"
        },
        compile: {
            files: {
                "src/Birke/NvcBundle/Resources/public/js/ember-templates.js": [
                    "src/Birke/NvcBundle/Resources/scripts/templates/**/*.hbs",
                    "src/Birke/NvcBundle/Resources/scripts/templates/*.hbs"
                 ]

            }
        }
    },
    watch: {
        templates: {
            files: [
                "src/Birke/NvcBundle/Resources/scripts/templates/**/*.hbs",
                "src/Birke/NvcBundle/Resources/scripts/templates/*.hbs"
            ],
            tasks: ['emberTemplates']
        }
    }
  });

  // Load plugins
  grunt.loadNpmTasks('grunt-ember-templates');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};
