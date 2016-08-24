<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="container mef">


<?php foreach($pixels as $pixel) { ?>
	<div class="pixelart">
		<img src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>" alt="pixelart<?= $pixel['id']?>">
		<a href="<?= $this->url('pixel_view', ['id' => $pixel['id']]) ?>" class="btn-edit" aria-label="Bouton d'édition"><span class=" glyphicon glyphicon-eye-open"></span></a>
	</div>


<?php } ?>
</div>
<div class="pages">
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