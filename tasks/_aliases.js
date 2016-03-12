module.exports = function (grunt) {
  'use strict';
  
  grunt.registerTask('develop', [
    'concurrent'
  ]);
  
  grunt.registerTask('deploy', [
    'rsync'
  ]);
  
  grunt.registerTask('test', [
    'phplint'
  ]);
  
  grunt.registerTask('default', ['develop']);
};
