<?php $this->layout('layout', ['title' => "Delete - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>

<div><p>Voulez-vous vraiment supprimer le pixel art suivant :</p>
<img src="<?= $this->assetUrl('img/pixelart/'.$pixel['url']); ?>" alt="pixelart"></div>
<form method="POST">
	<button name="delete">Supprimer</button>
	<button name="cancel">Annuler</button>
</form>


<?php $this->stop('main_content') ?>