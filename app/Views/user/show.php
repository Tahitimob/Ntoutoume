<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
<div class="mef form">
  <div class="container">
    <h2 class="text-color">Votre profil</h2>
    <div class="form-group col-md-6 col-md-offset-3">
      <form action="<?= $this->url('user_edit', ['id' => $_SESSION['user']['id']]) ?>" method="POST">

        <div class="form-group">
          <label>ID :</label>
          <label><?= $user['id']?></label>
        </div>
        <div class="form-group">
          <label>Nom d'utilisateur :</label>
          <label><?= $user['username']?></label>
        </div>
        <div class="form-group">
          <label>Email :</label>
          <label><?= $user['email']?></label>
        </div>
        <div class="form-group">
          <label>Role :</label>
          <label><?= $user['role']?></label>
        </div>
       <input type="submit" name="edit" value="edit">
      </form>
    </div>
  </div>
  <div class="wrap">
    <div id="b"></div>
  </div>
</div>
<?php $this->stop('main_content') ?>
