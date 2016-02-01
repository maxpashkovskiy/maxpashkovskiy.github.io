<?php

	$c=mysql_connect('tester','root','')or die('$c NOT');
	$sb=mysql_select_db('base',$c)or die ('$sb NoT');
	$s=('SELECT * FROM users');
	$q=mysql_query($s)or die('$q NOT');
	$d=mysql_fetch_array($q)or die('$d NOT');
	

?>