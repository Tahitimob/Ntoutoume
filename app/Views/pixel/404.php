<?php $this->layout('layout', ['title' => "404 - Pix'Hell"]) ?>

<?php $this->start('main_content'); ?>
<hr class="hr">
<h1 class="text-color">404. Perdu ?</h1>

<img src="<?= $this->assetUrl('img/shall-not-pass.gif')?>"/>

<?php $this->stop('main_content'); ?>