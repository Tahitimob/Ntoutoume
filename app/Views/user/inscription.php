<?php $this->layout('layout', ['title' => "Inscription - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>

<div id="inscription" class="mef">
	<div class="container">
	<h2 class="text-color">Inscrivez-vous dès maintenant</h2>
	<div class="form-group col-md-6 col-md-offset-3">
		<form method="POST">

			<div class="form-group">
				<label for="username">Nom d'utilisateur :</label>
				<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" name="password" placeholder="Mot de passe" id="email">
			</div>
			<div class="form-group">
				<label for="password">Password :</label>
				<input type="password" class="form-control" name="password" placeholder="Mot de passe" id="password">
			</div>
			<div class="form-group">
				<label for="cf-password">Confirmation password :</label>
				<input type="password" class="form-control" name="cf-password" placeholder="Mot de passe" id="cf-password">
			</div>
		<button name="register">S'inscire</button>
		</form>
	</div>
	</div>
	<div class="wrap">
		<div id="b"></div>
		<div class="vertical-line"></div>
	</div>
</div>
<?php $this->stop('main_content') ?>


