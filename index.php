<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion Banque du Peuple</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="public/css/connexion/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/connexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/connexion/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/css/connexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/connexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/connexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/css/connexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/css/connexion/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(public/css/connexion/images/bg-02.jpg);">
					<span class="login100-form-title-1">
						Se Connecter
					</span>
				</div>
				<?php
					if(isset($_GET['connexion']) && $_GET['connexion'] == 0)
					{
						echo '<div class="alert alert-danger" align="center">
								<strong>Erreur!</strong> Le Login ou Le mot de passe saisie est incorrect.
					  		   </div>';
					}
    			  ?>
				<form method="POST" action="/BanqueDuPeuple/src/controller/userController.php" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Login</span>
						<input class="input100" type="text" name="login" placeholder="Entrer votre Login">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="mdp" placeholder="Entrer votre mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="connexion">
							Valider
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="public/css/connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/css/connexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public/css/connexion/vendor/bootstrap/js/popper.js"></script>
	<script src="public/css/connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/css/connexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/css/connexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/css/connexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/css/connexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="public/css/connexion/js/main.js"></script>

</body>
</html>