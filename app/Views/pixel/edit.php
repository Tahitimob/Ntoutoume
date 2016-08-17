<?php $this->layout('layout', ['title' => "Edition - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<style>
.case{
	width: 50px;
	height: 50px;
}</style>
<div id="creation" class="mef">
	<div class="container">
		<div class="title">
			<p>Edition</p>
		</div>
	<div class="color_picker">
		<p class="text-color"> < Rectangle color ></p>
		<input class="jscolor" value="cc66ff">
	</div>
		<?php
		echo $pixel->create();
		?>
		<form method="POST">
			<button class="submit">Test</button>
		</form>
	</div>
</div>


<?php $this->stop('main_content') ?>

<?php $this->start('add_js') ?>
<script src="<?= $this->assetUrl('js/jscolor.js') ?>"></script>
<?php $this->stop('add_js') ?>