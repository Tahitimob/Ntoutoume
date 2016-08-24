<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="pixelart">
	<img src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>" alt="pixel art <?= $pixel['id']?>">
</div>


<div class="pages">
	<?php if($prev['id']){ ?>
		<a href="<?= $this->url('pixel_view', ['id' => intval($prev['id']) ]) ?>"><p>Pixel art précédent</p></a>
	<?php } ?>
	<?php if($next['id']){ ?>
		<a href="<?= $this->url('pixel_view', ['id' => intval($next['id']) ]) ?>"><p>Pixel art suivant</p></a>
	<?php } ?>
</div>
<?php $this->stop('main_content') ?>