<?php $this->layout('layout', ['title' => "Inscription - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>

<div id="inscription">
	<div class="container">
	<h2>Inscrivez-vous dès maintenant</h2>
	<div class="form-group col-md-6 col-md-offset-3">
		<form method="POST">

			<label for="username">Nom d'utilisateur :</label>
			<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">

			<label for="password">Password :</label>
			<input type="password" class="form-control" name="password" placeholder="Mot de passe">

		<button name="register">S'inscire</button>
		</form>
	</div>
	</div>
</div>
<?php $this->stop('main_content') ?>


