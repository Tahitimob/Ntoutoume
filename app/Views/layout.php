<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?= $this->e($title) ?> - <?= $w_site_name; ?></title>
	<link rel="icon" type="img/png" href="<?= $this->assetUrl('img/pixhell.png')?>">
	
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Orbitron:400,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>
<body>
	<div class="toggle-nav">
		<button class="btn btn-deflaut btn-hide hide-nav">¬Hide¬</button>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div>
				<nav class="navbar navbar-default navbar-fixed-top navbar-fixed-left">
				  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <!-- <div class="container responsive-logo">
				      	<a class="navbar-brand brand-position" href="<?= $this->url('default_home') ?>">
							<img class="brandStyle" alt="Logo pix'hell" src="<?= $this->assetUrl('img/pixhell.png')?>">
				      	</a>
				  	</div> -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				        
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav item-position">
				        <li>
				        	<a href="<?= $this->url('default_home') ?>">¬Accueil</a>
				        </li>
				        <?php if(isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')){ ?>
				        <li>
				        	<a href="<?= $this->url('user_list') ?>">¬Back Office</a>
				        </li>
				        <?php } ?>
				        <li>
				        	<a href="<?= $this->url('pixel_list') ?>">¬Pixel arts</a>
				        </li>
				        <?php if(isset($_SESSION['user'])){ ?>
				        <li>
				        	<a href="<?= $this->url('pixel_create') ?>">¬Création</a>
				        </li>
						
						<li>
							<a href="<?= $this->url('user_show', ['id' => $_SESSION['user']['id']]) ?>">¬Profil</a>
						</li>
						<li>
							<a href="<?= $this->url('security_logout') ?>">¬Deconnexion</a>
						</li>
						
						<?php } else { ?>
						<li>
							<a href="<?= $this->url('user_inscription') ?>">¬Inscription</a>
						</li>
						
						<li>
							<a href="<?= $this->url('security_login') ?>">¬Login</a>
						</li>
						

						<?php } ?>
						<div class="hidden-contact">
							<li>
								<a href="#" data-toggle="modal" data-target="#modal-contact">&nbsp;&nbsp;&nbsp;¬Contact</a>	
							</li>
						</div>
						
				      </ul>
				    </div><!-- /.navbar-collapse -->
				    
				    <div class="contact" id="contact">
				    	
				    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg btn-contact btn-contact-pos" data-toggle="modal" data-target="#modal-contact">
					Contact
					</button>
					<div class="text-color signature">
						<h4>Pixélisé par : </h4>
						<br>
						<h5>Halim De Ville</h5>
						<h5>Samuel Canivez</h5>
						<h5>Thibaut Desramé</h5>
					</div>

					<!-- Modal -->
						<div class="modal" id="modal-contact" tabindex="1" role="dialog" aria-labelledby="myModalContact">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header modal-style">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalContact">Contact</h4>
						      </div>
						      <div class="modal-body modal-style">
						          <div class="container">

									<form class="form-horizontal" id="contact-form">
									  	<div class="form-group">
									    		<label for="inputNom" class="col-sm-2 control-label">Nom :</label>
									    	<div class="col-sm-2">
									      		<input name="nom" type="text" class="form-control" id="inputNom" placeholder="Nom">
									    	</div>
									  	</div>
								  		<div class="form-group">
								    		<label for="inputPrenom" class="col-sm-2 control-label">Prenom :</label>
								    		<div class="col-sm-2">
								      			<input name="prenom" type="text" class="form-control" id="inputPrenom" placeholder="Prenom">
								    		</div>
								  		</div>
								  		<div class="form-group">
								    		<label for="inputMail" class="col-sm-2 control-label">Email :</label>
								    		<div class="col-sm-2">
								      			<input name="email" type="email" class="form-control" id="inputMail" placeholder="Email">
								    		</div>
								  		</div>
								  		<div class="form-group">
								    		<label for="comment" class="col-sm-2 control-label">Votre message :</label>
								    		<div class="col-sm-2">
								      			<textarea name="message" class="form-control" rows="5" id="comment" placeholder="Votre message..."></textarea>
								    		</div>
								  		</div>
									</form>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-contact-modal" data-dismiss="modal">Fermer</button>
									<button type="button" class="btn btn-primary btn-contact-modal modal-validate">Envoyer</button>
								</div>
						      </div> <!-- end of modal body -->						
						    </div>
						  </div>
						</div> <!-- end of modal -->
				    </div>
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
			<div class="col-md-10 col-md-offset-2 main">
				<section  class="text-center">
					<?= $this->section('main_content') ?>
				</section>
			</div>
		</div>
	</div>
<?php 
	// require "/../Controller/TwitterController.php";
?>

	<footer></footer>
	<script src="<?= $this->assetUrl("vendor/jquery/dist/jquery.min.js") ?>"></script>
	<script src="<?= $this->assetUrl("vendor/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
	<?= $this->section('add_js') ?>
</body>
</html>
