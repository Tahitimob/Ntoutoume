<?php $title =  $user['username']." - Pix'Hell";
$this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
<form action="<?= $this->url('user_edit', ['id' => $user['id']]) ?>" method="POST">
	<div class="container">
		<table class="table table-striped">
			<td><?= $user['id']?></td>
			<td><?= $user['username']?></td>
			<td><?= $user['email']?></td>
			<td><?= $user['role']?></td>
		</table>
		<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin'){ ?>
			<input type="submit" name="edit" value="edit">
		<?php } ?>
	</div>
</form>
<div id="listpixel">
	<?php foreach($pixels as $pixel) { 
		if($pixel['idUser'] == $user['id']){ ?>
		<div id="pixels">
			<div class="pixelart">
				<img src="<?= $this->assetUrl('img/pixelart/'); echo $pixel['url'] ?>" alt="pixelart<?= $pixel['id']?>">
			</div>
			<a href="<?= $this->url('pixel_edit', ['id' => $pixel['id']]) ?>">Editer</a>
		</div>
	<?php }} ?>
</div>
<?php $this->stop('main_content') ?>
