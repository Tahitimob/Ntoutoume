<?php $this->layout('layout', ['title' => "Delete - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>

<div class="mef form"><p class="text-color h3">Voulez-vous vraiment supprimer le pixel art suivant ?</p>
	<br>
	<br>
<img src="<?= $this->assetUrl('img/pixelart/'.$pixel['url']); ?>" alt="pixelart"></div>

<form class="form delete-pixel-btn col-md-12" method="POST">
	<button name="delete" class="btn btn-default btn-crud">Supprimer</button>
	<button name="cancel" class="btn btn-default btn-crud">Annuler</button>
</form>


<?php $this->stop('main_content') ?>