var app = angular.module('httpExample', [])

.controller('FetchController', ['$scope', '$http',
  function($scope, $http) {
    $scope.method = 'GET';
    // $scope.dbase = {mongoDbKey:''};
    $scope.dbase = {mongoDbKey:''};
    // $scope.url = 'https://api.mongolab.com/api/1/databases/test_data_maxflower/collections/userList?apiKey=';
$scope.url = 'https://api.mongolab.com/api/1/databases/dbtest/collections/user?f={"login":"max"}&apiKey=';
    $scope.fetch = function() {
      $scope.code = null;
      $scope.response = null;
      
      $http({method: $scope.method, url: $scope.url + $scope.dbase.mongoDbKey}).
        success(function(data, status) {
          $scope.status = status;
          $scope.data = data;
          $scope.data.users = data[0].users;          
        }).
        error(function(data, status) {
          $scope.data = data || "Request failed";
          $scope.status = status;
      });
    };    
}]);