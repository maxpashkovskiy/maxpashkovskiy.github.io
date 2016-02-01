
 var Ctrl = angular.module('MyApp',[]);

 Ctrl.controller('MyCtrl',function($scope,$http){


     	$scope.click=function(){
     		var data={'login':$scope.login,'pass':$scope.pass}; 	
     		alert($scope.login);
     		alert($scope.pass);
            alert('click!!');
// $scope.login = function (){
	// $scope.login=max;
	// $scope.pass=12345;
	// $(document).ready(function(){
	// 	$('#sub').click(function(){
        $http.post('ins.php',data)
 .success(function(data,status,header,config){
alert(data)
alert(data.pass)
alert('SendData')
console.log($scope.login);
console.log($scope.pass);
 }).error(function(data) {
console.log($scope.login);
console.log($scope.pass);

            //   });   
            // })
});
        // };
 };
 });