<? require_once(ROOT.'/models/category.php'); ?>
<div id="top-contacts">
	<div id="contacts">
		<span><i class="fa fa-phone-square" aria-hidden="true"></i><p>(099) 31-34-934</p></span>
		<span><i class="fa fa-envelope" aria-hidden="true"></i><p>admin@oShop.com</p></span>
	</div>
	<div id="social">
		<a><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		<a><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
	</div>
</div>
<div id="top">
	<div id="logo">
		<a href="/" class="transmision">oShop</a>
	</div>
	<div id="search-box">
		<a style="width: 100%;"><input type="text" id="search"></a>
		<a href="#"><i id='search-key' class="fa fa-search" aria-hidden="true"></i></a>
	</div>
	<div id="auth">
		<a><i style="font-size: 1.5em;"class="fa fa-shopping-basket" aria-hidden="true"></i></a>
		<a>Вход</a>
		<a>Регистрация</a>
	</div>
</div>
<div id="top-categories">
	<? foreach ($categoryList as $item): ?>
		<a href="category/<?= $item['id']?>"><?= $item['name']?></a>
	<? endforeach; ?>
</div>