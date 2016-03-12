module.exports = function (grunt) {
    'use strict';

    var config = {
        source: {
            files: ['site/*'],
            tasks: [],
            options: {
                livereload: true
            }
        }
    };

    grunt.config.set('watch', config);
};
