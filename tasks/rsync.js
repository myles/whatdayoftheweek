module.exports = function (grunt) {
    'use strict';

    var config = {
        options: {
            args: ["--verbose"],
            recursive: true
        },
        prod: {
            options: {
                src: './source/',
                dest: '/srv/www/whatdayoftheweek.com/www/html',
                host: 'bear',
                delete: true
            }
        }
    };

    grunt.config.set('rsync', config);
};
