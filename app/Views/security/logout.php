<?php $this->layout('layout', ['title' => " - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
	<form class="form-inline" action="<?= $this->url('security_logout') ?>" method="POST">
      <h2 style="color:white">Etes vous sur de vouloir vous déconnecter ?</h2>
      <button type="submit" class="btn btn-default" name="security_logout">Se déconnecter</button>
  </form>
<?php $this->stop('main_content') ?>