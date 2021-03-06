<?php $this->layout('layout', ['title' => " - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="mef form">
  <div class="container-fluid">
    <h2 class="text-color">Connectez-vous dès maintenant</h2>
    <div class="form-group col-md-6 col-md-offset-3">
      <form method="POST" action="<?= $this->url('security_login') ?>">

        <div class="form-group">
          <label for="username">Nom d'utilisateur :</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe :</label>
          <input type="password" class="form-control" name="password" placeholder="Mot de passe" id="password">
        </div>
       <button type="submit" class="btn btn-default btn-inscription" name="security_login">Se connecter</button>
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