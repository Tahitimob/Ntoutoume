<?php $this->layout('layout', ['title' => 'Nothing to see here']) ?>


<?php $this->start('main_content'); ?>
<hr class="hr">
<h1 class="text-color">403. Nothing to see here!</h1>

<img src="<?= $this->assetUrl('img/shall-not-pass.gif')?>"/>

<?php $this->stop('main_content'); ?>

