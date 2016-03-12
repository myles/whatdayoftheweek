module.exports = function (grunt) {
    'use strict';

    var config = {
        options: {
            hostname: '0.0.0.0',
            port: 4000,
            base: 'source',
            keepalive: true
        },
        watch: {
            options: {
                livereload: true
            }
        }
    };

    grunt.config.set('php', config);
};
