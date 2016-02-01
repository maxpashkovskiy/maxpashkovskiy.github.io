var Ctrl = angular.module('MyApp',[]);
// Эта ф-ция GET работает!!!
    Ctrl.controller('MyCtrl',function($scope,$http){
      $scope.load = function (){
            $http.get('question.json').
             success(function(data) {
                $scope.question=data.question;
               alert(data.question.answers[(0)].author);
                // Выводит в консоли
                console.log(data.question.answers[(0)].author);
                console.log(data.question.author);
                 console.log(data.question);
                 
            })
        };
          
      });