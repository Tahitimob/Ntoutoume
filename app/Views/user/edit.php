<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
<div class="mef form">
  	<div class="container">
	    <h2 class="text-color">Votre profil</h2>
	    <div class="form-group col-md-6 col-md-offset-3">
		    <form action="<?= $this->url('user_edit', ['id' => $_SESSION['user']['id']]) ?>" method="POST">
				<table class="table">
					<tr>
				        <div class="form-group">
				    	    <td><label><?= $user['username']?></label></td>
				          	<td><input type="text" name="username" placeholder="Nouveau nom d'utilisateur"></td>
				        </div>
			        </tr>
			        <tr>
				        <div class="form-group">
				        	<td><label><?= $user['email']?></label></td>
				          	<td><input type="email" name="email" placeholder="Nouvel Email"></td>
				        </div>
			        </tr>
		        </table>
		       <input type="submit" name="sauvegarder" value="Sauvegarder" class="btn-contact h4">
		       <?php
				if (isset($error)) {
					echo "<br>";
					echo $error;
				}
				?>
		     </form>
		</div>
  	</div>
  	<div class="wrap">
    	<div id="b"></div>
  	</div>
</div>
	
<?php $this->stop('main_content') ?>