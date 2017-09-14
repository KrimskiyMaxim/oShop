<!doctype html>
<html>
<head>
	<? $title = 'Admin Panel';
	require_once(ROOT.'/views/layouts/head.php');?>
</head>
<body>
<header>
	<? require_once(ROOT.'/views/layouts/header.php');?>
</header>
<article>
	<div id="content">
		<div id="page">
			<span id="label-page">Админ-панель</span>
			<a href="/admin/category">Изменить категории</a>
			<a href="/admin/brand">Изменить бренды</a>
			</div>
		</div>
	</div>
</article>
<footer>
	<? require_once(ROOT.'/views/layouts/footer.php');?>
</footer>
</body>
</html>