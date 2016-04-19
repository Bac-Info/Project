<?php 
session_start();
if (isset($_SESSION['user'])==false) {	
	echo"<script>alert('Pour me contacter, vous devez avant inscriver/connectez-vous.');window.location = 'Inscri.php'</script>";
}
else{	
	$Titre = $_POST['Titre'];
	$Message = $_POST['Message'];
	$cause = $_POST['sujet'];
	$from = $_SESSION['user'];
	mysql_connect('localhost','root','') or die('Error1') ;	
	mysql_select_db('Website') or die ('Error2');
	$res = "Insert into Contact (Titre,Message,Cause,name) values('$Titre','$Message','$cause','$from')" ;
	$what = mysql_query($res);
	echo"<script>window.location='aide.php'</script>";
	mysql_close();
}
?>