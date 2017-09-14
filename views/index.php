<!doctype html>
<html>
<head>
	<? $title = 'oShop';
	require_once(ROOT.'/views/layouts/head.php');?>
</head>
<body>
<header>
	<? require_once(ROOT.'/views/layouts/header.php');?>
</header>
<article>
	<div id="content">
		<div id="page">
			<span id="label-page">Последние товары</span>
			<div id="block-items">
			<? for($i=0; $i<12; $i++) {
	echo("
			<div class='block-item'>
				<div class='img-item'>
					Изображение
				</div>
				<div class='disc-item'>
					<p>text text text text text text text text text text text text text text text </p>
				</div>
			</div>
	");
}
			?>
			</div>
		</div>
	</div>
</article>
<footer>
	<? require_once(ROOT.'/views/layouts/footer.php');?>
</footer>
</body>
</html>