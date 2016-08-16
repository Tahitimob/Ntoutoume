<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?= $this->e($title) ?> - <?= $w_site_name; ?></title>
	
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Orbitron:400,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-left">
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
			<img class="brandStyle" alt="Logo pix'hell" src="<?= $this->assetUrl('img/pixhell.png')?>">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav item-position">
	        <li><a href="<?= $this->url('default_home') ?>">¬Accueil</a></li>
	        <br>
			<li><a href="<?= $this->url('user_inscription') ?>">¬Inscription</a></li>
			<br>
			<li><a href="<?= $this->url('security_login') ?>">¬Login</a></li>
			<br>
			<li><a href="<?= $this->url('pixel_create') ?>">¬Création</a></li>
			<br>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	    <div class="contact" id="contact">
	    	<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg btn-contact" data-toggle="modal" data-target="#myModal">
		Contact
		</button>

		<!-- Modal -->
			<div class="modal" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Contact</h4>
			      </div>
			      <div class="modal-body">
			          <div class="container">
						<form class="form-horizontal">
						  	<div class="form-group">
						    		<label for="inputNom" class="col-sm-2 control-label">Nom :</label>
						    	<div class="col-sm-2">
						      		<input type="text" class="form-control" id="inputNom" placeholder="Nom">
						    	</div>
						  	</div>
					  		<div class="form-group">
					    		<label for="inputPrenom" class="col-sm-2 control-label">Prenom :</label>
					    		<div class="col-sm-2">
					      			<input type="text" class="form-control" id="inputPrenom" placeholder="Prenom">
					    		</div>
					  		</div>
					  		<div class="form-group">
					    		<label for="inputMail" class="col-sm-2 control-label">Email :</label>
					    		<div class="col-sm-2">
					      			<input type="email" class="form-control" id="inputMail" placeholder="Email">
					    		</div>
					  		</div>
						</div>
			      </div> <!-- end of modal body -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Envoyer</button>
			      </div>
			  		</form>
			    </div>
			  </div>
			</div>
	    </div>
	  </div><!-- /.container-fluid -->
	</nav>

		

	<section  class="text-center">
		<?= $this->section('main_content') ?>
	</section>

<?php 
	// require "/../Controller/TwitterController.php";
?>
	
	

	<script src="<?= $this->assetUrl("vendor/jquery/dist/jquery.min.js") ?>"></script>
	<script src="<?= $this->assetUrl("vendor/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
</body>
</html>
