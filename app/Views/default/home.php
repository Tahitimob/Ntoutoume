<?php $this->layout('layout', ['title' => "Pix'Hell"]) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<div id="home" class="">
  <div class="vertical-line"></div>
	<div class="container-fluid responsive-text text-center">
    <div class="title-placement">
      <h2 class="title">WELCOME</h2>
      <h2 class="title">ON</h2>
      <h1 class="title text-center">PIX'HELL</h1>
    </div>
    <hr class="hr">
    <br>
    <div class="godown">
      <a href="<?= $this->url('pixel_list') ?>">
        <p class="glyphicon glyphicon-chevron-down"></p>
      </a>
    </div>
    <div class="wrapper">
      <div class="vr">&nbsp;</div>
    </div>
  </div>
  
</div>
</div>
<?php $this->stop('main_content') ?>
