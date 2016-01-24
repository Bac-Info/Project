<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Ma première page en Php</TITLE >
</HEAD>
<BODY>
<B> Bienvenue au langage HTML </B><BR>
<SCRIPT LANGUAGE="javascript">
document.write("<B> Bienvenue au langage Javascript </B><BR>");
</script>
<?php
  echo ("Bonjour !");
?>
<?php
// utilisation des variables
$libp = "disque dur";$pu = 158.5;$descp="";
echo (gettype($libp). "<br>". gettype($pu)."<br>") ;
// conversion de types
settype($pu, "integer");
echo ("la variable pu est de type: ". gettype($pu) ."et contenant la valeur :" .$pu."<br>" );
$pu = (string)$pu;
echo ("la variable pu est de type:".gettype($pu) ."et contenant la valeur :" .$pu."<br>");
// Test d'existence de variables
echo ("lib variable non définie $lib<br>");
//lib variable non définie
echo ("test1 : " .isset($pu)."<br>");
// retourne 1, pu est une variable définie
echo ("test2 : " .isset($lib)."<br>");
// retourne 0, lib est une variable non définie
echo ("test3 : " .isset($descp)."<br>");
//retourne 1, descp est une variable définie
?>
</BODY>
</HTML>