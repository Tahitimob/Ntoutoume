<?php $this->layout('layout', ['title' => 'Nothing to see here']) ?>


<?php $this->start('main_content'); ?>
<audio controls autoplay style="display:none;">
  <source src="<?= $this->assetUrl("audio/rickroll.mp3")?>" type="audio/mpeg">
</audio>

<h1 class="text-color">403. Nothing to see here!</h1>

<img src="<?= $this->assetUrl('img/shall-not-pass.gif')?>"/>

<?php $this->stop('main_content'); ?>

