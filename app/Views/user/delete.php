<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
<form method="POST">
	<div class="container" style="color:white;">
		<h2>Etes vous sur de vouloir supprimer définitivement cet utilisateur ?</h2>
		<table class="table">
			<div class="row">
				<tr>
					<td><?= $user['username']?></td>
					<td><?= $user['email']?></td>
				</tr>
			</div>
		</table>
	</div>
	<input type="submit" name="cancel" value="cancel">
	<input type="submit" name="delete" value="delete">
	</form>
	
<?php $this->stop('main_content') ?>