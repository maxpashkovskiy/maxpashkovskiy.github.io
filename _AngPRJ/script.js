function myCtrl($scope) {
  $scope.login = "Max";
   $scope.pass = "12345";
  $scope.contacts = [
    {type:'phone', value:'408 555 1212'},
    {type:'email', value:'john.smith@example.org'} ];
 
  $scope.greet = function() {
   alert(this.name);
  };
 
  $scope.addContact = function() {
   this.contacts.push({type:'email', value:'yourname@example.org'});
  };
 
  $scope.removeContact = function(contactToRemove) {
   var index = this.contacts.indexOf(contactToRemove);
   this.contacts.splice(index, 1);
  };
 
  $scope.clearContact = function(contact) {
   contact.type = 'phone';
   contact.value = '';
  };
  $scope.button = function() {
     alert(this.login);
   alert(this.pass);
  };

}
//    var app=angular.module("myApp",[]);

//  app.controller=("myCtrl",function($scope,$http){

// $scope.submit=function(){
//  $http.post('ins.php',
//    {'login':$scope.login,'pass':$scope.pass})
//  .success(function(data){
// alert(data)
//  }).error(function(data) {

//    });
// };

});