<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
<form method="POST">
	<div class="mef form" style="color:white;">
		<h2 class="text-color h3">Etes vous sur de vouloir supprimer définitivement cet utilisateur ?</h2>
		<table class="table">
			<br>
			<fieldset class="col-md-4 col-md-offset-4">
				<legend class="text-color">Nom d'utilisateur :</legend>
				<div class="form-group text-color">
          			<p class="h4"> < <?= $user['username']?> ></p>
				</div>
				<br>
				<br>
				<legend class="text-color">Email :</legend>
				<div class="form-group text-color">
          			<p class="h4"><?= $user['email']?></p>
				</div>
			</fieldset>
		</table>
	</div>
	<div class="form delete-user-btn col-md-12">
	<input type="submit" name="delete" value="Supprimer" class="btn btn-default btn-crud">
	<input type="submit" name="cancel" value="Annuler" class="btn btn-default btn-crud">
	</form>
	</div>
<?php $this->stop('main_content') ?>