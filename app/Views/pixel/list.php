<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>

<?php foreach($pixels as $pixel) { ?>
	<div class="pixelart" style="display:inline-block">
		<img src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>" alt="pixelart<?= $pixel['id']?>">
	</div>

<?php } ?>

<?php $this->stop('main_content') ?>