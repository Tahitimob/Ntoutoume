<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
<form action="<?= $this->url('user_edit', ['id' => $_SESSION['user']['id']]) ?>" method="POST">
	<div class="container">
		<table class="table table-striped">
			<td><?= $user['id']?></td>
			<td><?= $user['username']?></td>
			<td><?= $user['email']?></td>
			<td><?= $user['role']?></td>
		</table>
		<input type="submit" name="edit" value="edit">
	</div>
</form>
<?php $this->stop('main_content') ?>
