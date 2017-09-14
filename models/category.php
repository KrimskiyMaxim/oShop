<?
	require_once(ROOT.'/components/frame.php');
	$begin = new queryDB;
	$categoryList = $begin->arrTable('category', 'sort_order', 'DESC');
?>