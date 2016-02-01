<?php
echo "INS.PHP READY";
$data=json_decode(file_get_contents("php://input"));
$login=mysql_real_escape_string($data->login);
$pass=mysql_real_escape_string($data->pass);




	$c=mysql_connect('tester','root','')or die('$c NOT');
	$sb=mysql_select_db('base',$c)or die ('$sb NoT');
	$s=('SELECT * FROM users');
	$q=mysql_query($s)or die('$q NOT');
	$d=mysql_fetch_array($q)or die('$d NOT');


do{
   if($login==$d['login']){
   	echo "Success!!!";
// header("Location:TEST_MAIN.php");
// exit();
   }
   else 
   	echo "NOT MATCH!!";
}while($d=mysql_fetch_array($q));

// $data=json_decode(file_get_contents("php://input"));
// $login=mysql_real_escape_string($data->login);
// $pass=mysql_real_escape_string($data->pass);
// include('SEL_FOR_MAIN.php');
// do{
//    if($login==$d['login'])&&($pass=$d['pass']){
// header("Location:TEST_MAIN.php");
// exit();
//    }
// }while($d=mysql_fetch_array($q));
?>
