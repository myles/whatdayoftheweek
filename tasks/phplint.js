module.exports = function (grunt) {
    'use strict';

    var config = {
        files: ['./source/*.php']
    };

    grunt.config.set('phplint', config);
};
