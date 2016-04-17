<?php
	$name = $_POST['name'];
	$Email = $_POST['Email'];
	$passwd = $_POST['passwd'];
//echo"$name<br>$Email<br>$passwd<br>$cpasswd";
mysql_connect('localhost','root','') or die('Error1') ;
mysql_select_db('Website') or die ('Error');
$res = "Insert into Liste (Email,passwd,name) values('$Email','$passwd','$name')" ;
$what = mysql_query($res);
//echo'good';
mysql_close();
?>