<?
	class adminController {
		function actionIndex() {
			require_once(ROOT.'/models/admin_panel.php');
			require_once(ROOT.'/views/admin.php');
		}
		function actionCategory() {
			require_once(ROOT.'/models/admin_panel.php');
			require_once(ROOT.'/views/admin_category.php');
		}
		function actionBrand() {
			require_once(ROOT.'/models/admin_panel.php');
			require_once(ROOT.'/views/admin_brand.php');
		}
	}
?>