<!DOCTYPE html>
<html>

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
  
  <!-- Generated Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<?php
	session_start();
	if (isset($_SESSION['user'])==false) {	
		echo("<script>function log(){alert('Connectez/inscrivez vous avant de continuer...')}</script>");
	}else{
		echo("<script>function log(){document.sentMessage.submit()}</script>");
	}
	
?>
</head>

<body id="page-top" class="index">

    <!-- Header -->
    <header>
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
	
	
	
	
	
	
	
    <!-- Insctiption 
    <section id="Insctiption">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Insctiption</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="Ins" id="Ins" action ="" novalidate>                                     
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mot de passe</label>
                                <input type="password" class="form-control" placeholder="Mot de passe" id="passwd" required data-validation-required-message="Enter un mot de passe.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirmer votre Mot de passe</label>
                                <input type="password" class="form-control" placeholder="Confirmer votre Mot de passe" id="cpasswd" required data-validation-required-message="Enter un mot de passe.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  ///////Insctiption -->
	
	
	
	
	
    <!-- Contact -->
    <section id="Insctiption">
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
                    <form name="sentMessage" id="contactForm" novalidate>                                      <!--                      ////             -->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Sujet</label>
                                <select class="form-control" placeholder="sujet" id="sujet" required data-validation-required-message="Please enter a message.">
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
                                <input type="text" class="form-control" placeholder="titre" id="titre" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button name="btnc" type="button" class="btn btn-success btn-lg" onclick="log()" >Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 <!-- ///////Contact -->
	
	
	
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

    <!-- Contact Form -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
</body>

</html>