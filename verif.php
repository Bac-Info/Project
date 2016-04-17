<?php 
session_start();
if (isset($_SESSION['user'])==false) {	
echo"<script>alert('Pour me contacter, vous devez avant inscriver/connectez-vous.');window.location = 'Inscri.php'</script>";
}
else{header('Location: rec.php');}
?>