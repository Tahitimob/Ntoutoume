<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des utilisateurs</h2>
	<div class="container">
	<?php foreach($users as $user) : ?>
		<div class="row">
			<div class="col-md-12">
				<?= $user['username']?>
				<?= $user['email'] ?>
			</div>
		</div>
	<?php endforeach ?>
	</div>
<?php $this->stop('main_content') ?>
