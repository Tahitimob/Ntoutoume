<?php $this->layout('layout', ['title' => "Inscription - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>

<div id="inscription">
	<div class="container">
	<h2>Inscrivez-vous dès maintenant</h2>
	<div class="form-group">
		<form method="POST">
			<label>Login</label>
			<input type="text" name="username">

			<label>Password</label>
			<input type="password" name="password">

		<button name="register">S'inscire</button>
		</form>
	</div>
	</div>
</div>
<?php $this->stop('main_content') ?>