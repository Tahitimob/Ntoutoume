<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class=" form mef1">

	<h2 class="text-color">Voici les Pixel-Arts déja crées !</h2>
	<br>
	<h4 class="text-color">A vous de jouer!</h4>
	<br>
	<a href="<?= $this->url('pixel_create') ?>"><button class="btn btn-defalut btn-inscription">Créer</button></a>
	<br>
	<hr class="hr">
<div class="vr3">&nbsp;</div>
<?php foreach($pixels as $pixel) { ?>
		<div class="pixelart">
			<img src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>" alt="pixelart<?= $pixel['id']?>">
			<a href="<?= $this->url('pixel_view', ['id' => $pixel['id']]) ?>" class="btn-edit" aria-label="Bouton de visualisation"><span class=" glyphicon glyphicon-eye-open"></span></a>
		</div>



<?php } ?>
</div>
<div class="pages text-color">
	<?php if($page >1){ ?>
		<a href="<?= $this->url('pixel_list', ['page' => ($page-1)]) ?>"><p><span class=" glyphicon glyphicon-arrow-left"></span>Page précédente</p></a>
	<?php } ?>
 	<?php for($i = max(1, $page-3); $i <= min($nbPages , $page +3) ; $i++ ){?>
		<a href="<?= $this->url('pixel_list', ['page' => $i]) ?>"><p><?= $i ?></p></a>
	<?php } ?>
	<?php if($page < $nbPages){ ?>
		<a href="<?= $this->url('pixel_list', ['page' => ($page+1)]) ?>"><p>Page suivante<span class=" glyphicon glyphicon-arrow-right"></span></p></a>
	<?php } ?>
</div>
<?php $this->stop('main_content') ?>