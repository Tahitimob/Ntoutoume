<?php $this->layout('layout', ['title' => "Utilisateurs - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid form">
	<h2 class="title-crea">Liste des utilisateurs</h2>
		<table class="table text-color">
			<div class="row">
	      		<tr class="bold">
	        		<td>#</td>
	        		<td>Username</td>
	        		<td>Email</td>
	        		<td>Role</td>
	      		</tr>
	      	</div>
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
								    <?php 
								    // var_dump($_SESSION['user']['id']);
									    // var_dump($user['id']);
									    if ($_SESSION['user']['id'] != $user['id']) {//id session = id edit	
									    	?>
									    	<a class="btn btn-default btn-crud" href="<?= $this->url('user_delete', ['id' => $user['id']]) ?>">Supprimer</a>
									    	<?php
									    }
								    ?>
				            		
				          		</div>
				       		</td>
				      	</tr>
			      	</div>
		      	</div>
	    	<?php endforeach ?>
	  	</table>
	</div>
<?php $this->stop('main_content') ?>
