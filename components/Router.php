<?
class Router{
	private $routes;
	
	function __construct() {
		$this->routes = require(ROOT.'/components/config/routes.php');
	}
	
	function start() {
		$URI = trim($_SERVER['REQUEST_URI'], '/');
		
		foreach($this->routes as $uri => $preg) {
			if ($URI == $uri) {
				$str = preg_split('~/~', $preg);
				$controllerName = ucfirst(array_shift($str).'Controller');
				$actionName = 'action'.ucfirst(array_shift($str));
				
				require(ROOT.'/controllers/'.$controllerName.'.php');
				$begin = new $controllerName;
				$begin->$actionName();
			}
		}
	}
}
?>