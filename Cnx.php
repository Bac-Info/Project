<?php
	session_start();
	if ( (isset($_POST['name'])==false) || (isset($_POST['passwd'])==false) ) 
	{
		header('location: Inscri.php');
	}	
	else
	{ 

		$name = $_POST['name'];
		$passwd = $_POST['passwd'];
		mysql_connect('localhost','root','') or die('Error1') ;	
		mysql_select_db('Website') or die ('Error');
		$res = "Select name,passwd From Liste" ;
		$res2 = "select * from liste";
		$what2 = mysql_query($res2);
		$length = mysql_num_rows($what2);

		$nb=0;
		$b = false;
		if ($what = mysql_query($res)){
			while(($ligne = mysql_fetch_array($what)) and ($b == false) and ($length>=$nb)){
				if(    ($name==$ligne[0]) && ($ligne[1] == $passwd)  ){
					$b = true;
				}
				else {	$nb++; }
			}
		}

		if ( $b==true ){
			$_SESSION['user']=$_POST['name'];

			header('location: aide.php');
		}
		else{
			echo"<script>alert('Mot de passe et/ou Nom incorrect.');
						  window.location = 'Inscri.php';</script>";
		}	

			mysql_close();
	}
?>