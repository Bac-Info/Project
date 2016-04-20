<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
?>
<html>
<script>

</script>
<head>
  <title>Bac Info | Aide</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<style>
		.btna {
			  background: #222729;
			  background-image: -webkit-linear-gradient(top, #222729, #222729);
			  background-image: -moz-linear-gradient(top, #222729, #222729);
			  background-image: -ms-linear-gradient(top, #222729, #222729);
			  background-image: -o-linear-gradient(top, #222729, #222729);
			  background-image: linear-gradient(to bottom, #222729, #222729);
			  -webkit-border-radius: 0;
			  -moz-border-radius: 0;
			  border-radius: 0px;
			  font-family: Georgia;
			  color: #27e83e;
			  font-size: 20px;
			  padding: 10px 20px 10px 20px;
			  border: solid #000000 2px;
			  text-decoration: none;
			  margin-top : 3%;
		}

		.btna:hover {
		  background: #ffffff;
		  background-image: -webkit-linear-gradient(top, #ffffff, #ffffff);
		  background-image: -moz-linear-gradient(top, #ffffff, #ffffff);
		  background-image: -ms-linear-gradient(top, #ffffff, #ffffff);
		  background-image: -o-linear-gradient(top, #ffffff, #ffffff);
		  background-image: linear-gradient(to bottom, #ffffff, #ffffff);
		  text-decoration: none;
		}
.cl {
    width: 1990px;
    height: 30px;
    background-color: red;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 30s;

  margin: 0;
  width: 100%;
  font-family: sans-serif;
  font-size: 20px;
  color:white; 	
  text-transform: uppercase;
  text-align:center;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes example {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
header .container {
    padding-top: 30px;
    padding-bottom: 100px;
}

</style>
  <!-- Generated Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">

    <!-- Header -->
    <header>
	<center><button class="btna" onclick="window.location='index.php'">Retourner</button></center>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.png" width='35%'>
                    <div class="intro-text">
                        <span class="name">Bac Info</span>
                        <hr class="star-light">
                        <span class="skills">Aide</span>
                    </div>
					<br><br>
					<div id="section">
						<b style='font-size:21px;'>Mot de passe pour les solutions des exercices</b>
						<p><font id="mdp" color="blue"><a onclick="document.getElementById('mdp').innerHTML ='123456'">" ****** "</a></font></p>
						<br>
						<b style='font-size:21px;'>Telechargements</b>
						<p><a href="ftp://ftp-developpez.com/pascal/turbo-pascal/tpw15-fr.zip">Turbo Pascal</a></p>
						<p><a href="http://notepad-plus-plus.org/repository/6.x/6.8.3/npp.6.8.3.Installer.exe">Notepad++</a></p>
						<p><a href="http://tinyurl.com/o4qsz5x">EasyPhP</a></p>
					</div>
                </div>
            </div>
        </div>
    </header>
	<!-- Header -->
	
    <!--Contact-->
    <section id="Contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary">
					<h2>Contact</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="Contact" id="Contact" action="verif.php" method="POST">                                     
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Sujet</label>
                                <select class="form-control" placeholder="sujet" id="sujet" name='sujet' required data-validation-required-message="Please enter a message.">
									<option>Me contacter</option>
									<option>Proposer une nouvelle solution pour un exercice</option>
									<option>Recommendations</option>
									<option>Autre</option>
								</select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>                       
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Titre</label>
                                <input type="text" class="form-control" placeholder="Titre" id="Titre" name='Titre' required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="Message" name='Message' required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Envoyer</button><button type="button" onclick="location.href='DeCnx.php'" class="btn btn-success btn-lg">Deconnecter</button>
								<button style='float:right'type="reset" class="btn btn-success btn-lg">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!--Contact-->

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h3>Velzimar - COPYRIGHT ® tous les droits sont réservés 2014-2016</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<input class='cl' name="ch_texte" type="text" value="<?php echo $_SESSION['user'];  ?>" size="1080" maxlength="30" disabled="disabled" />
    <!-- Contact Form -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
</body>

</html>