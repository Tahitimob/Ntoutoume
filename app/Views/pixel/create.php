<?php $this->layout('layout', ['title' => "Create - Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<style>
.case{
	width: 50px;
	height: 50px;
}</style>
<div class="color_picker">
	<p>Rectangle color:</p>
	<input class="jscolor" value="000000">
</div>
<?php
	echo $pixel->create();
?>
<form method="POST">
	<button class="submit">Test</button>
</form>



<?php $this->stop('main_content') ?>

<?php $this->start('add_js') ?>
<script src="<?= $this->assetUrl('js/jscolor.js') ?>"></script>
<?php $this->stop('add_js') ?>