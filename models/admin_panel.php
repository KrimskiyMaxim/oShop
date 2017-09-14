<?
	require_once(ROOT.'/components/frame.php');
	$begin = new queryDB;
	$categoryList = $begin->arrTable('category', 'sort_order', 'DESC');
	$brandList = $begin->arrTable('brand');
	
//	function attrList($var = 3) { /*Доделать... */
//		$begin = new queryDB;
//		$attrList = $begin->query('SELECT * FROM `attr_id` WHERE attr_id.c_id = '.$var.';');
//		$i = 0;
//		while ($row = $attrList -> fetch_assoc()) {
//			$arrRow[$i] = $row;
//			$i++;
//		}
//		echo($arrRow[0]['name']);
//		die();
//	}

?>