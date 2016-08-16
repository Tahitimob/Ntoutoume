<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
	<div class="container">
		<table class="table table-striped">
			<div class="row">
				<tr>
					<td><?= $user['username']?></td>
					<td><input type="text" name="username" placeholder="New Username"></td>
				</tr>
			</div>
			<div class="row">
				<tr>
					<td><?= $user['email']?></td>
					<td><input type="text" name="email" placeholder="New Email"></td>
				</tr>
			</div>
			<div class="row">
				<tr>
					<td><?= $user['role']?></td>
					<td><input type="text" name="role" placeholder="New Role"></td>
				</tr>
			</div>						
		</table>
		<input type="submit" name="sauvegarder" value="sauvegarder">
	</div>
	
<?php $this->stop('main_content') ?>