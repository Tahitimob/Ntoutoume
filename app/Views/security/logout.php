<?php $this->layout('layout', ['title' => " - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="mef form">
  	<div class="container">
	    <h2 class="text-color">Votre profil</h2>
	    <div class="form-group col-md-6 col-md-offset-3">
		    <form action="<?= $this->url('security_logout') ?>" method="POST">
		    	<h3 class="text-color">Etes vous sur de vouloir vous déconnecter ?</h3>
		       <button type="submit" class="btn btn-default" name="security_logout">Se déconnecter</button>
		    </form>
		</div>
  	</div>
  	<div class="wrap">
    	<div id="b"></div>
  	</div>
</div>
<?php $this->stop('main_content') ?>