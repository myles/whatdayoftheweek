module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json')
    });

    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-rsync');
    grunt.loadNpmTasks('grunt-phplint');
    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.task.loadTasks('./tasks/');
};
