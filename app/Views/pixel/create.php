<?php $this->layout('layout', ['title' => "Create - Pix'Hell"]) ?>
<?php $this->start('create_pixel');

	$this->stop('create_pixel');
?>
<?php $this->start('main_content') ?>
<style>
.case{
	width: 50px;
	height: 50px;
}</style>
<?php
	$pixel->create();
?>
<form method="POST">
	<button class="submit">Test</button>
</form>

<footer>
</footer>
<?php $this->stop('main_content') ?>