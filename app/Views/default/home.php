<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div id="home" class="mef">
  <div class="vertical-line"></div>
	<div class="container">
    <h2 class="title">WELCOME</h2>
    <h2 class="title">ON</h2>
    <h1 class="title text-center">PIX'HELL</h1>

    <hr class="hr">
    <br>
    <div class="godown">
      <a href="<?= $this->url('pixel_create') ?>">
        <p class="glyphicon glyphicon-chevron-down"></p>
      </a>
    </div>
  </div>
  
</div>
<?php $this->stop('main_content') ?>
