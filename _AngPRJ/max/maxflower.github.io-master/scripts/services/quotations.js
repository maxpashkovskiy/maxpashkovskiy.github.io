'use strict';

/**
 * @ngdoc service
 * @name blogApp.Quotations
 * @description
 * # Quotations
 * Factory in the blogApp.
 */
angular.module('blogApp')
  .factory('Quotations', function ($http) {
    // Service logic
    var Quotations = {
      getAll: function () {
        // $http returns a promise, which has a then function, which also returns a promise
        var promise = $http.get('words.json').then(function (response) {
          // The then function here is an opportunity to modify the response
          console.log(response);
          // The return value gets picked up by the then in the controller.
          return response.data;
        });
        // Return the promise to the controller
        return promise;
      }
    };  
    return Quotations;    
  });
