<?
	require_once(ROOT.'/components/frame.php');
	$begin = new queryDB;
	$categoryList = $begin->arrTable('category');
	$brandList = $begin->arrTable('brand');
	
	function attrList($var = '') { /*Доделать... */
		$begin = new queryDB;
		$minNumAC = $begin->query("SELECT * FROM `category` ORDER BY `id` ASC");
		$minNumAC = $minNumAC->fetch_assoc();
		$minNumAC = $minNumAC['id'];
		($var == '')?$var = $minNumAC:$var = $var;
		$attrList = $begin->query('SELECT * FROM `attr_id` WHERE c_id = '.$var.';');
		$i = 0;
		while ($row = $attrList -> fetch_assoc()) {
			$arrRow[$i] = $row;
			$i++;
		}
		return($arrRow);
	}
?>