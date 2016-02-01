// var dburl='https://api.mongolab.com/api/1/databases/dbtest/collections/user?apiKey=-ZDYR1u4BylJeH0ISGVSrRyyGUOu8i79';
var dburl='127.0.0.1:27017';
var col=['user'];
var dbmongo=require('mongojs').connect(dburl,col);

function user(login,pass){
this.login=login;
this.pass=pass;

}

var user1=new user("max",12345);

db.user.save(user1,function(err,savedUser){

});