<?php
	$name = $_POST['name'];
	$Email = $_POST['Email'];
	$passwd = $_POST['passwd'];
	$cpasswd = $_POST['cpasswd'];

function verifBD($name,$Email){
		mysql_connect('localhost','root','') or die('Error1') ;	
		mysql_select_db('Website') or die ('Error2');
		$res = "Select name,Email From Liste" ;
		$res2 = "select * from liste";
		$what2 = mysql_query($res2);
		$length = mysql_num_rows($what2);

		$nb=0;
		$b = false;
		if ($what = mysql_query($res)){
			while(($ligne = mysql_fetch_array($what)) and ($b == false) and ($length>=$nb)){
				if(    ($name==$ligne[0]) || ($ligne[1] == $Email)  ){
					$b = true;
				}
				else {	$nb++; }
			}
		}
	echo $b;
	return $b;
}

if (verifBD($name,$Email)==false){
	$res = "Insert into Liste (Email,passwd,name) values('$Email','$passwd','$name')" ;
	$what = mysql_query($res);
	header('location: Inscri.php');
	//echo'good';
}else{
	echo "<meta http-equiv='content-type' content='text/html;charset=utf-8' />";
	echo "<script>
			alert('Email/Nom dèja existe');
			window.location = 'Inscri.php';
		  </script>";
}
mysql_close();
?>