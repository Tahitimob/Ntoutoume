<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="container mef">

<?php foreach($pixels as $pixel) { ?>
	<div class="pixelart">
		<img src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>" alt="pixelart<?= $pixel['id']?>">
	</div>
</div>

<?php } ?>

<?php $this->stop('main_content') ?>