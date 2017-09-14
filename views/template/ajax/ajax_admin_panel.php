<?
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	require_once(ROOT.'/models/admin_panel.php');
	switch($_POST[sw]) {
		case 'category':
			echo json_encode($categoryList[$_POST['varia']-1]);
			break;
		case 'brand':
			echo json_encode($brandList[$_POST['varia']-1]);
			break;
	}
?>