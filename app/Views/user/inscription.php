<?php $this->layout('layout', ['title' => "Inscription - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>

<div class="mef form">
	<div class="container-fluid">
	<h2 class="text-color">Inscrivez-vous dès maintenant</h2>
	<div class="form-group col-md-6 col-md-offset-3">
		<form method="POST">

			<div class="form-group">
				<label for="username">Nom d'utilisateur :</label>
				<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" name="email" placeholder="Email" id="email">
			</div>
			<div class="form-group">
				<label for="password">Mot de passe :</label>
				<input type="password" class="form-control" name="password" placeholder="Mot de passe" id="password">
			</div>
			<div class="form-group">
				<label for="cf-password">Confirmation du Mot de passe :</label>
				<input type="password" class="form-control" name="cf-password" placeholder="Confimation du mot de passe" id="cf-password">
			</div>
		<button name="register" class="btn btn-default btn-inscription">S'inscire</button>
		<?php
		if (isset($error)) {
			echo "<br>";
			echo $error;
		}
		?>
		</form>
	</div>
	</div>
	<div class="wrap">
		<div id="b"></div>
	</div>
</div>
<?php $this->stop('main_content') ?>


