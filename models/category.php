<?
	require_once(ROOT.'/components/frame.php');
	$begin = new queryDB;
	$categoryListH = $begin->arrTable('category', 'sort_order', 'DESC');
?>