<?
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	require_once(ROOT.'/models/admin_panel.php');
	switch($_POST[sw]) {
		case 'category':
			$attrList = attrList($_POST['varia']);
			$cList = $categoryList[$_POST['varia']-1];
			echo json_encode(array ($cList, $attrList));
			break;
		case 'brand':
			echo json_encode($brandList[$_POST['varia']-1]);
			break;
	}
?>