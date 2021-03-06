<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>


<div class="mef form">
  <hr class="hr">
    <div class="container-fluid text-color profil-pad">
    <h2 class="title-crea">Profils</h2>
    <div class="form-group col-md-6 col-md-offset-3">
      <form action="<?= $this->url('user_edit', ['id' => $_SESSION['user']['id']]) ?>" method="POST">
        <hr class="hr">
        <div class="form-group">
          <div class="vr3">&nbsp;</div>
          <label class="h4">Nom d'utilisateur :</label>
          <label class="h4"><?= $user['username']?></label>
        </div>
        <?php 
          // var_dump($_SESSION['user']['id']);
          // var_dump($user['id']);

          if ($_SESSION['user']['id'] == $user['id']) {//id session = id edit
            ?>
        <div class="form-group">
          <label class="h4">Email :</label>
          <label class="h4"><?= $user['email']?></label>
        </div>
            <input class ="btn-crud" type="submit" name="edit" value="EDITER">
            <?php
          }
        ?>
      </form>
    </div>
  </div>
  <div class="vr2">&nbsp;</div>
</div>
<hr class="hr">
<div class="container-fluid">
<div id="listpixel">

	<?php foreach($pixels as $pixel) { 
		if($pixel['idUser'] == $user['id']){ ?>
		<div id="pixels">
			<div class="pixelart">
				<img class="img-profil" src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>?<?php echo time();?>" alt="pixelart<?= $pixel['id']?>">
			</div>
			<?php if(isset($_SESSION['user']) && $_SESSION['user']['id'] == $user['id']){?> 
				<a href="<?= $this->url('pixel_edit', ['id' => $pixel['id']]) ?>" class="btn-edit" aria-label="Bouton d'édition"><span class=" glyphicon glyphicon-pencil"></span></a>
        <a href="<?= $this->url('pixel_delete', ['id' => $pixel['id']]) ?>" class="btn-delete" aria-label="Bouton de suppression"><span class=" glyphicon glyphicon-trash"></span></a>
			<?php }?>
		</div>
	<?php }} ?>
</div>
</div>
<?php $this->stop('main_content') ?>
