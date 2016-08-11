<?php $this->layout('layout', ['title' => "Create - Pix'Hell"]) ?>
<?php 
	if(isset($_POST['colors'])){
		foreach($_POST['colors'] as $color){
			echo $color;
		};
	}
?>
<?php $this->start('main_content') ?>
<style>
.case{
	width: 50px;
	height: 50px;
}</style>
<div class="case" style="background-color: #010203"></div>
<div class="case" style="background-color: #456789"></div>
<div class="case" style="background-color: #FFFFFF"></div>
<form method="POST">
	<button class="submit">Test</button>
</form>

<footer>
</footer>
<?php $this->stop('main_content') ?>