'use strict';

/**
 * @ngdoc directive
 * @name blogApp.directive:myQuatations
 * @description
 * # myQuatations
 */
angular.module('blogApp')
  .directive('myQuatations', function () {
    return {
      template: '<div id="js-fadeInElement" class="fade-in-element">'+
    				'&laquo;{{data.text}}&raquo;<br>'+    				
    				'<span>{{data.author}}</span>'+
  				'</div>',
      restrict: 'E',      
      controller: function($scope, $interval){      	
      	var i = 0;          
        $scope.data = {
          text: 'Программирование на С похоже на быстрые танцы на только что отполированном полу людей с острыми бритвами в руках.',
          author: 'Waldi Ravens'
        };


      	$interval(function(){
          i = (Math.random()*99).toFixed(0);          
          
          $scope.words.then(function(value){
            $scope.data = {
              text: value[i].text,
              author: value[i].author
            };
          });                 	        	
    	  }, 10000);
      }
    };
  });
