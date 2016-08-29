<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class=" form mef1">

	<h2 class="text-color">Voici les Pixel-Art déja crées !</h2>
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
			<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == "admin") { ?>
			<a href="<?= $this->url('pixel_delete', ['id' => $pixel['id']]) ?>" class="btn-delete" aria-label="Bouton de supression"><span class=" glyphicon glyphicon-trash"></span></a>
			<?php } ?>
		</div>



<?php } ?>
</div>
<div class="pages text-color">
	<div class="placement-page-list">
		<?php if($page >1){ ?>
			<a style="display:inline-block" href="<?= $this->url('pixel_list', ['page' => ($page-1)]) ?>"><p class="h4 colorabestos"><span class=" glyphicon glyphicon-arrow-left"></span></p></a>
		<?php } ?>
	 	<?php for($i = max(1, $page-3); $i <= min($nbPages , $page +3) ; $i++ ){?>
			<a style="display:inline-block" href="<?= $this->url('pixel_list', ['page' => $i]) ?>"><p class="h4 colorabestos"><?= $i ?></p></a>
		<?php } ?>
		<?php if($page < $nbPages){ ?>
			<a style="display:inline-block" href="<?= $this->url('pixel_list', ['page' => ($page+1)]) ?>"><p class="h4 colorabestos"><span class=" glyphicon glyphicon-arrow-right"></span></p></a>
		<?php } ?>
	</div>
</div>
<?php $this->stop('main_content') ?>