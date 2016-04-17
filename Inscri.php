<!DOCTYPE html>
<html>

<head>
  <title>Bac Info | Inscription</title>
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
	</style>
  <!-- Generated Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">
	<center><button class="btna" onclick="window.location='aide.php'">Retourner</button></center>


    <!--Insctiption-->
    <section id="Insctiption">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary">
                    <h2>Insctiption</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="Insctiption" id="Insctiption" action ="recIns.php" method="POST">                                     
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="Email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mot de passe</label>
                                <input type="password" class="form-control" placeholder="Mot de passe" name="passwd" required data-validation-required-message="Enter un mot de passe.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirmer votre Mot de passe</label>
                                <input type="password" class="form-control" placeholder="Confirmer votre Mot de passe" name="cpasswd" required data-validation-required-message="Confirmer votre mot de passe.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
								<button style='float:right'type="reset" class="btn btn-success btn-lg">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!--Insctiption-->

	<!-- Login -->
    <section id="Login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary">
					<h2>Connection</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="Login" id="Login" action="Cnx.php" method="POST" >                                 
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mot de passe</label>
                                <input type="password" class="form-control" placeholder="Mot de passe" name="passwd" required data-validation-required-message="Enter un mot de passe.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Connecter</button>
								<button style='float:right'type="reset" class="btn btn-success btn-lg">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 <!-- Login -->
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