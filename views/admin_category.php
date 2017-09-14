<!doctype html>
<html>
<head>
	<? $title = 'Admin Panel / Категории';
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
			<span id="label-page">Категории</span>
			<div id="edit_category_block">
			<form method="post" name="categories_edit" id="categories_edit">
				<span class="label_block">Изменить</span>
				<div class="select_div" id="select_div-top">
					<select name="opt_category" id="opt_category">
						<? foreach ($categoryList as $item): ?>
							<option value="<?= $item['id']?>"><?= $item['id']?> - <?= $item['name']?></option>
						<? endforeach; ?>
					</select>
					<div><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></div>
				</div>
				<div class="text_div">
					<input type="text" name="category_name"	id="category_name" placeholder="Имя: <?=$categoryList[0]['name']?>">	
				</div>
				<div class="text_div">
					<input type="text" name="category_sort"	id="category_sort" placeholder="Номер сортировки: <?=$categoryList[0]['sort_order']?>">			
				</div>
				<div class="select_div">
					<select name="category_status" class="select" id="category_status">
						<?(($categoryList[0]['status']) == 0)?$status=" selected":$status='';?>
							<option value="1" >Статус: Доступен</option>
							<option value="0" <?=$status?> >Статус: Скрыт</option>
					</select>
					<div><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></div>
				</div>
				<input type="submit" name='submit_add_categories_edit' id='submit_add_categories_edit' value='Изменить'>
				<input type="submit" name='submit_add_categories_edit' id='submit_add_categories_edit' value='Удалить'>
			</form>
			</div>
			<div id="add_category_block">
			<form method="post" name="categories_add" id="categories_add">
				<span class="label_block">Добавить</span>
				<div class="text_div">
					<input type="text" name="category_add_name"	id="category_add_name" placeholder="Имя:">	
				</div>
				<div class="text_div">
					<input type="text" name="category_add_sort"	id="category_add_sort" placeholder="Номер сортировки:">			
				</div>
				<div class="select_div">
					<select name="category_add_status" class="select" id="category_add_status">
							<option value="1">Статус: Доступен</option>
							<option value="0">Статус: Скрыт</option>
					</select>
					<div><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></div>
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