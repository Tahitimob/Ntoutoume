<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?> - <?= $w_site_name; ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>
		<form method="POST">
			<button class="submit">Test</button>
		</form>
		
		<footer>
		</footer>
	</div>
	<script src="<?= $this->assetUrl('js/jquery-3.1.0.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
</body>
</html>