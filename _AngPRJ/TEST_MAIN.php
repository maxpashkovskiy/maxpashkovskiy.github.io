<?php
  include ('Session.php')
?>
<?php
 // include ('Session_view.php')
 // include ('SET_TAB.php')
?>
<?php
 include ('SEL_FOR_MAIN.php')
?>
<?php
// include ('MAIN_USER_SEL.php')
?>
<?php
// include ('MAIN_INSERT.php')
// include ('vyborka.php')

?>
<?php

?>

<!DOCTYPE html>
<html lang="ru">
<head>

	<!-- <meta charset="utf-8"> -->
	<!-- / Изменить язык на русский кодировки UTF-8 в httpd.conf APACHE -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/verstka12.css" >
	<style type="text/css" media="screen">
	
	</style>
	<script src="modernizr-1.7.min.js" type="text/javascript" charset="utf-8" async defer></script>
	 <script type="text/javascript" src="jquery-1.8.2.js"></script>
    <script type="text/javascript" src="jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="script_jquery.js"></script>
  <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="jquery.marquee.js"></script>
  <script type="text/javascript" src="jquery.marquee.min.js"></script>
    <script  type="text/javascript"  charset="utf-8" async defer>
    $(document).ready(function(){
    	 
	$('#but').click(function(){
		
	$('#info').slideToggle(600);

});
$('.header1').mouseover(function() {
	$('.header1').load("header.php",function(){
		// alert('TEST OK')
	}) ;

});

});
    </script>

</head>

<body>
<div class="support">
	<a href="#" title="">Help</a>
	<a href="#" title="">Поддержка</a>
</div>
<div class="football">
<a href="http://www.pfc-cska.com" title="">Cska.com</a>
<a href="http://www.fcbarcelona.com" title="">FCBarcelona.com</a>
<a href="http://www.realmadrid.com" title="">RealMadrid.com</a>
	<a href="http://www.championat.com">Championat.com</a>
	<a href="http://www.rbc.ru" title="">RBC.ru</a>
	<a href="http://www.f-1.ru" title="">F-1.ru</a>
	<a href="http://www.vk.com" title="">VK.com</a>
</div>
<div class="header1" >
	<?php

 // include ('header.php');
// do {
// printf('<div class=h2><a href="#">%s</a></div>',$d['header']);
// }while($d=mysql_fetch_array($q));	
// mysql_close($h);

	?>

</div>
	<form action="" method="post" accept-charset="windows-1251">

<input type='text' class='set' id='name' name='name' placeholder='Insert name' value='' >
<input type=password id="pass" name="pass" placeholder="Insert password">
<input type='submit' class='but' id='submit' name="submit" value='save'><br>

<table border=1 cellspacing="0" cellpadding="8"><?php

 ?>
	<tr><td>1st:
	<?php 
	$connect=mysql_connect('localhost','root','')or die('dont conn set_tab');
	$dbbase=mysql_select_db('base',$connect)or die('dont set set_tab');
	$sel=('SELECT * FROM set_tab');
	$query=mysql_query($sel);
	$data=mysql_fetch_array($query)or die('dont data set_tab');
	// include ('SET_TAB.php');
	$data=mysql_fetch_array($query)or die('dont data set_tab');
	do{

	if ($data['brend'] !==''){
	echo 'Success $data!!';
	echo $data['brend'];
	echo $data['cost'];	
	// var_dump($data);

	}

	}while ($data=mysql_fetch_array($query));
mysql_close($connect);
	echo $data['brend']; ?></td>
	<td>2nd:<?php echo $data['cost'];
	$test=parse_ini_file("info.ini",TRUE);//vigruzka is file data
	print_r($test);
	?></td>
	</tr>
	</table>
<table border=1 cellspacing="0" cellpadding="8"><tr><td></td><td></td></tr></table>
<table border=1 cellspacing="0" cellpadding="8" >
	<td colspan="12" rowspan="3" headers="settab">
	<tr ><?php 
	$connect=mysql_connect('localhost','root','')or die('dont conn set_tab');
	$dbbase=mysql_select_db('base',$connect)or die('dont set set_tab');
	$sel=('SELECT * FROM set_tab');
	$query=mysql_query($sel);
	$data=mysql_fetch_array($query)or die('dont data set_tab');
	printf('<p>%s<br>%s</p>',$data['brend'],$data['cost']);
	mysql_close($connect);
	?></tr>

	<tr>1<?php var_dump($data['brend']);?></tr><tr>2<?php var_dump($data['cost']);?></tr>

	</td>
</table>
<marquee id="marquee">Лучшее Впереди !! Marquee with CSS3 Support<a href="http://www.vk.com" title="">VK.com</a><img src="css/volf1.jpg" alt=""><img src="css/mk31.jpg" alt="">&copy Pashkovskiy Max Пашковский Максим</marquee>
<input type='submit' class='font'  name="font" value='ChangeFONT'>
<h1 ><div class="h1" charset="utf-8"><div id="ch_color">АвтоМаг</div><div id="adr">Aдрeс Kалининграd ул.Katina 29</div><div id="cont">Tелефон 8-(4012)-218812</div><div id="graf">
	Пн-Пт с 8 до 17
</div><a id="user"><?php echo 'User:'.$_SESSION['name']; ?></a></div>

</h1>
<div class="menu"><div class="menu_right">
<ul>
	<li><a href="#">Меню</a></li>	
	<li><a href="#">Запчасти</a>
	<ul>
		<li><a href="#">Лада</a></li>
		<li><a href="#">BMW</a></li>
		<li><a href="#">AUDI</a></li>
		<li><a href="#">VW</a></li>
		<li><a href="#">UAZ</a></li>
	</ul>
	</li>
	<li><a href="#">Mагазин</a></li>	
	<li><a href="#">Пользователи</a>
	<ul>
	<li><a href="#">Max</a></li>
	<li><a href="#">Serg</a></li>
	<li><a href="#">Mama</a></li>
	<li><a href="#">Irina</a></li>		
	</ul>
	</li>	
	<li><a href="#">About</a></li>
</ul>
</div></div>
<div id="v1"><marquee id="vertik" direction="down" loop="-1" scrollamount="2" >Вертикальное перемещение</marquee></div>
<?php
include('SET_TAB.php');
	do{
	// printf('<p>%s<br>%s</p>',$data['brend'],$data['cost']);
	if ($data['brend'] !==''){
	// echo 'Success $data!!';
// var_dump($data);
	$count++;
	$txt='buy';
$a=count($data['brend']);
// echo $a;
// echo $count;
	// $value=$count+$txt;
	$value=$data['id'];
	$brend=$data['brend'];
	$cost=$data['cost'];
 	  // printf('<table border=1 cellspacing="0" cellpadding="8" class="table" ><tr><td>1st:%s</td><td>2nd:%s</td><td>3rd:<input type="submit" name="<?=$value>" id="buy" value='.$value.'></input></td><td>4th:<input type="submit" value="buy"></input></td></tr><tr></tr><tr></tr></table>',$data['brend'],$data['cost']."$");
	 printf('<table border=1 cellspacing="0" cellpadding="8" class="table" ><tr class="tr"><td>1st:%s</td><td>2nd:%s</td><td><img src="%s"></td><td>3rd:<input type="submit" name="<?=$value?>" id="buy" value='.$value.'></input></td><td>4th:<input type="submit" value="buy"></input></td></tr></table>',$data['brend'],$data['cost']."$",$data['pict']);
	 // echo'<table border=1 cellspacing="0" cellpadding="8" class="table" ><tr><td>1st:'.$data['brend'].'</td><td>2nd:'.$data['cost'].'</td><td>3rd:<input type="submit" name="<?=$value>" id="buy" value='.$value.'></input></td><td>4th:<input type="submit" value="buy"></input></td></tr><tr></tr><tr></tr></table>';
	} 

}while ($data=mysql_fetch_array($query));

// mysql_close($connect);
?>
<?php

// $connect=mysql_connect('localhost','root','')or die('dont conn set_tab');
// $dbbase=mysql_select_db('base',$connect)or die('dont set set_tab');
// $sel=('SELECT * FROM set_tab');
// $query=mysql_query($sel);
// $data=mysql_fetch_array($query)or die('dont data set_tab');
// echo 'ABC';
 // $_SESSION['number']=$count;
 // 				echo $count;
  
  // include('SEL_FOR_MAIN.php');
 // $plus++;
 // echo $plus;
// include('SET_TAB.php');
do{
	
		if(isset($_SESSION['name'])){			
			$login=$_SESSION['name']."";		
		// // include('vyborka.php');
		
			 // echo $count;
			 echo $_SESSION['number'];
			do{
// SEL_FOR_MAIN.php
// include('SEL_FOR_MAIN.php');
			if($login===$d['login']){
			echo 'Success!!';

			 
			
		// echo $d['login'];
				if(isset($_POST['<?=$value?>'])){
					$count=$_POST['<?=$value?>'];
					echo $_POST['<?=$value?>']."<br>";
					$_SESSION['number']=$count;
					
 					include('MAIN_USER_SEL.php');
 					do{
					if($n==$result['name']){
			// echo $result['name'];
			// echo $result['brend'];
			// echo $result['cost'];
			printf('<table border=1 cellspacing="0" cellpadding="8" class="pre" id="buy"><tr class="tr1"><td>1st:%s</td><td>2nd:%s</td><td>BASKET User:%s</td><td>4th:<input type="submit" name="<?=$value?>" value='.$value.'></td></tr><tr></tr><tr></tr></table>',$result['brend'],$result['cost']."$",$_SESSION['name']);		
			}
			
			}while($result=mysql_fetch_array($qry));
					// $result=mysql_fetch_array($qry)or die('dont result set_tab');
					  
					
				// $v=mysql_query($s)or die ('NOT $V');
				// $r=mysql_fetch_array($v)or die ('NOT $R');
					include ('vyborka.php');
					// print_r($r['id']);
					 printf('<table border=1 cellspacing="0" cellpadding="8" class="finish" id="buy" >BASKET User:%s<tr><td>1st:%s</td><td>2nd:%s</td><td><img src="%s"></td><td>4th:<input type="submit" id="buy1" value="buy"></td></tr><tr></tr><tr></tr></table>',$_SESSION['name'],$r['brend'],$r['cost']."$",$r['pict']);	
						
								
					// while ($r=mysql_fetch_array($v)){
		// 			if(isset($r['id'])){
		// 				echo '$r TRUE';
		// 				if($count==$r['id']){
		// 				print_r($r['id']);
					
		// $test=1;
		// echo $r;
		// }	
		// 	echo '$count';
		// 	print_r($count);
	 // 		echo '$value POST TRUE !!';
	 // 		print_r($result['brend']);
	 // 		print_r($result['cost']);
	 // 		echo $_POST['<?=$value>']; 
	 // 		$id=$_POST['<?=$value>'];
		// 	print_r($login);
		// 	print_r($_POST['name']);
		// 	print_r($id);
		// 	print_r($cost);
		// 	print_r($brend);

		// 	include ('MAIN_INSERT.php');
		// 	$qu=mysql_query($selq)or die ('NOT QU $SELQ!!');
		// 	mysql_close($conn);
			// $row=mysql_fetch_array($qu)or die ('$row not True');

		// MAIN_USER_SEL.php
		// $sl=("SELECT `name`,`cost`,`brend` FROM set_tab WHERE `name`='max'");
		 // $qry=mysql_query($sl)or die ('$query NOT MAIN_USER_SEL');
		// 	// printf('<table border=1 cellspacing="0" cellpadding="8" class="pre" id="buy">BASKET User:%s<tr class="tr1"><td>1st:%s</td><td>2nd:%s</td><td></td><td>4th:<input type="submit" name="<?=$value>" value='.$value.'></td></tr><tr></tr><tr></tr></table>',$_SESSION['name'],$result['brend'],$result['cost']."$");		
		// }
		// }
		
		}
		else $test=0;
		
		}	
			
			}while ($d=mysql_fetch_array($q));	
			
		}
	else echo 'Fail!!';
}while($data=mysql_fetch_array($query));

mysql_close($connect);
// INSERT IN BASE!!
// 	if($id=1){
// 		var_dump($id);
// 	if($_POST['<?=$value>']){
// // printf('<table border=1 cellspacing="0" cellpadding="8" class="pre" id="buy">BASKET User:%s<tr class="tr1"><td>1st:%s</td><td>2nd:%s</td><td></td><td>4th:<input type="submit" name="<?=$value>" value='.$value.'></td></tr><tr></tr><tr></tr></table>',$_SESSION['name'],$data['brend'],$data['cost']."$");
			

// 		}
// }
// else echo 'INSERT $ID NOT WORK';



?>
<?php
if(isset($_POST['<?=$value?>'])){
include('vyborka.php');
do{
printf('<table border=1 cellspacing="0" cellpadding="8" class="finish" id="buy" >BASKET User:%s<tr><td>1st:%s</td><td>2nd:%s</td><td><img src="%s"></td><td>4th:<input type="submit" id="buy1" value="buy"></td></tr><tr></tr><tr></tr></table>',$_SESSION['name'],$r['brend'],$r['cost']."$",$r['pict']);

} while($r=mysql_fetch_array($v));
}
?>


</form>
<?php
if(isset($_POST['<?=$value?>'])){
include('vyborka.php');
do{
printf('<table border=1 cellspacing="0" cellpadding="8" class="finish" id="buy" >BASKET User:%s<tr><td>1st:%s</td><td>2nd:%s</td><td><img src="%s"></td><td>4th:<input type="submit" id="buy1" value="buy"></td></tr><tr></tr><tr></tr></table>',$_SESSION['name'],$r['brend'],$r['cost']."$",$r['pict']);

} while($r=mysql_fetch_array($v));
}
?>
<h4 class="content_info">      Table of colors       </h4>         

<div class="info" id="info"><p >Legal note:

   This distribution includes cryptographic software.  The country in 
   which you are currently may have restrictions on the import, 
   possession, and use, and/or re-export to another country, of 
   encryption software.  BEFORE using any encryption software, please 
   check the country's laws, regulations and policies concerning the
   import, possession, or use, and re-export of encryption software, to 
   see if this is permitted.

   The U.S. Government Department of Commerce, Bureau of Industry and
   Security (BIS), has classified this software as Export Commodity 
   Control Number (ECCN) 5D002.C.1, which includes information security
   software using or performing cryptographic functions with asymmetric
   algorithms.  The form and manner of this Apache Software Foundation
   distribution makes it eligible for export under the License Exception
   ENC Technology Software Unrestricted (TSU) exception (see the BIS 
   Export Administration Regulations, Section 740.13) for both object 
   code and source code.
</p></div>
<input type='submit' value="but" name='but' id='but'>
<a id="page" href="Session.php" title="">Next Page</a>
<div class="footer">&copy Pashkovskiy Max</div>
</body>
</html>