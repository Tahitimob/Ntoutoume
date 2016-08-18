<?php $this->layout('layout', ['title' => "Utilisateurs - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="container form">
	<h2 class="title-crea">Liste des utilisateurs</h2>
		<table class="table text-color">
	      		<tr>
	        		<th>#</th>
	        		<th>Username</th>
	        		<th>Email</th>
	        		<th>Role</th>
	      		</tr>
			<?php foreach ($users as $user): ?>
				<div class="row">
					<div class="">
				      	<tr>
				        	<td><?= $user['id']; ?></td>
				        	<td><?= $user['username']; ?></td>
				        	<td><?= $user['email']; ?></td>
				        	<td><?= $user['role']; ?></td>
				        	<td>
				          		<div class="btn-group" role="group">
				            		<a class="btn btn-default btn-crud" href="<?= $this->url('user_show', ['id' => $user['id']]) ?>">Voir</a>
				            		<a class="btn btn-default btn-crud" href="<?= $this->url('user_delete', ['id' => $user['id']]) ?>">Supprimer</a>
				          		</div>
				       		</td>
				      	</tr>
			      	</div>
		      	</div>
	    	<?php endforeach ?>
	  	</table>
	</div>
<?php $this->stop('main_content') ?>
