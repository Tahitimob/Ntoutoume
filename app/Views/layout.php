<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?= $this->e($title) ?> - <?= $w_site_name; ?></title>
	
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse navbar-css">
	  	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?= $this->url('default_home') ?>">
			<img class="brandStyle" alt="Logo pix'hell" src="<?= $this->assetUrl('img/logo50px.png')?>">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="<?= $this->url('default_home') ?>">Accueil</a></li>
	        <!--Faire l'affichage du menu en fonction de l'état de connexion du client-->
			<li><a href="<?= $this->url('user_inscription') ?>">Inscription</a></li>
			<li><a href="<?= $this->url('security_login') ?>">Login</a></li>
			<li><a href="<?= $this->url('pixel_create') ?>">Création</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

		

		<section  class="text-center">
			<?= $this->section('main_content') ?>
		</section>

	<div class="container-fluid">
		<div class="row footer">
			<div class="col-md-8">
				<p class="text-center">Created by Canivez Samuel, Deville Halim, Desramé Thibaut</p>
			</div>
			<div class="col-md-2 scrollinside">
				<?php 
				//require "/../Controller/TwitterController.php";
				?>
			</div>
		</div>
	</div>
	
	<footer>
	</footer>
	<script src="<?= $this->assetUrl("vendor/jquery/dist/jquery.min.js") ?>"></script>
	<script src="<?= $this->assetUrl("vendor/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
	<?= $this->section('add_js') ?>
</body>
</html>
