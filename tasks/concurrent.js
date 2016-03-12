module.exports = function (grunt) {
    'use strict';

    var config = {
        target: {
            tasks: ['php:watch', 'watch'],
            options: {
                logConcurrentOutput: true
            }
        }
    };

    grunt.config.set('concurrent', config);
};
