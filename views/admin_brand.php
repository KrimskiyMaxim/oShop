<!doctype html>
<html>
<head>
	<? $title = 'Admin Panel / Бренды';
	require_once(ROOT.'/views/layouts/head.php');?>
	<link type="text/css" rel="stylesheet" href="/views/template/css/admin_panel.css">
</head>
<body>
<header>
	<? require_once(ROOT.'/views/layouts/header.php');?>
</header>
<article>
	<div id="content">
		<div class="page_admin" id="page">
			<span id="label-page">Бренды</span>
			<div id="edit_brand_block">
			<form method="post" name="categories_edit" id="categories_edit">
				<span class="label_block">Изменить</span>
				<div class="select_div" id="select_div-top">
					<select name="opt_brand" id="opt_brand">
						<? foreach ($brandList as $item): ?>
							<option value="<?= $item['id']?>"><?= $item['id']?> - <?= $item['name']?></option>
						<? endforeach; ?>
					</select>
					<div><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></div>
				</div>
				<div class="text_div">
					<input type="text" name="brand_name"	id="brand_name" placeholder="Имя: <?=$brandList[0]['name']?>">	
				</div>
				<input type="submit" name='submit_add_categories_edit' id='submit_add_categories_edit' value='Изменить'>
				<input type="submit" name='submit_add_categories_edit' id='submit_add_categories_edit' value='Удалить'>
			</form>
			</div>
			<div id="add_brand_block">
			<form method="post" name="categories_add" id="categories_add">
				<span class="label_block">Добавить</span>
				<div class="text_div">
					<input type="text" name="brand_add_name"	id="brand_add_name" placeholder="Имя:">	
				</div>
				<input type="submit" name='submit_add_categories' id='submit_add_categories' value='Добавить'>
			</form>
			</div>
		</div>
	</div>
</article>
<footer>
	<? require_once(ROOT.'/views/layouts/footer.php');?>
</footer>
	<script src="/views/template/js/admin_panel.js"></script>
</body>
</html>