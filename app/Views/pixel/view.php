<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="pixelart pos">
	<img src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>" alt="pixel art <?= $pixel['id']?>">
</div>


<div class="pages form text-color">
	<div class="placement-page">
		<?php if($prev['id']){ ?>
			<a href="<?= $this->url('pixel_view', ['id' => intval($prev['id']) ]) ?>"><p class="h4 colorabestos"><span class=" glyphicon glyphicon-arrow-left"></span>Pixel art précédent</p></a>
		<?php } ?>
		<?php if(isset($_SESSION['user']) && $_SESSION['user']['id'] == $pixel['idUser']){ ?>
			<a href="<?= $this->url('pixel_edit', ['id' => $pixel['id']]) ?>" class="btn-edit" aria-label="Bouton d'édition"><span class=" glyphicon glyphicon-pencil"></span></a>
		<?php } ?>
		<?php if($next['id']){ ?>
			<a href="<?= $this->url('pixel_view', ['id' => intval($next['id']) ]) ?>"><p class="h4 colorabestos">Pixel art suivant<span class=" glyphicon glyphicon-arrow-right"></span></p></a>
		<?php } ?>
	</div>
</div>
<?php $this->stop('main_content') ?>