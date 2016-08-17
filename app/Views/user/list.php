<?php $this->layout('layout', ['title' => "Utilisateurs - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
	<h2 style="color:white;">Liste des utilisateurs</h2>
	<div class="container">
		<table class="table" style="color:white;">
    		<thead>
	      		<tr>
	        		<th>#</th>
	        		<th>Username</th>
	        		<th>Email</th>
	      		</tr>
    		</thead>
			
			<?php foreach ($users as $user): ?>
				<div class="row">
					<div class="col-md-12">
				      	<tr>
				        	<td><?= $user['id']; ?></td>
				        	<td><?= $user['username']; ?></td>
				        	<td><?= $user['email']; ?></td>
				        	<td><?= $user['role']; ?></td>
				        	<td>
				          		<div class="btn-group" role="group">
				            		<a class="btn btn-default" href="<?= $this->url('user_show', ['id' => $user['id']]) ?>">Voir</a>
				            		<a class="btn btn-default" href="<?= $this->url('user_delete', ['id' => $user['id']]) ?>">Supprimer</a>
				          		</div>
				       		</td>
				      	</tr>
			      	</div>
		      	</div>
	    	<?php endforeach ?>
	  	</table>
	</div>
<?php $this->stop('main_content') ?>
