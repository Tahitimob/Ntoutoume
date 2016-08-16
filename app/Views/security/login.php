<?php $this->layout('layout', ['title' => " - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
	<form class="form-inline" action="<?= $this->url('security_login') ?>" method="POST">
      <div class="form-group">
        <label for="username">Votre pseudo : </label>
        <input type="text" class="form-control" id="username" placeholder="Jane Doe" name="username">
      </div>
      <div class="form-group">
        <label for="password">Votre mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password">
      </div>
      <button type="submit" class="btn btn-default" name="security_login">se connecter</button>
  </form>
<?php $this->stop('main_content') ?>