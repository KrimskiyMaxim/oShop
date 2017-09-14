<?
class connectDB{ 
	protected $myDB;
	private $arrConnect;
	function __construct(){
		$this->arrConnect = require(ROOT.'/components/config/MySQL.php');
		$this->connect();
	}
	function connect(){	/*Подключение к БД*/
		$this->myDB = new MySQLi ($this->arrConnect['server'], $this->arrConnect['user'], $this->arrConnect['password'], $this->arrConnect['db_name']);
		!($this->myDB->connect_error)?:die('Error connect: ' . $this->myDB->connect_error);
	}
	function disconnect() {	/*Закрытие соединения с БД*/
		$this->myDB->close();
	}
}
class queryDB extends connectDB{
	function query($query) { /*запрос к БД с возвращением результата*/
		$connect = new connectDB;
		$result = $connect->myDB->query($query);
		$connect->disconnect();
		return($result);
	}
	function arrTable($table, $order_by = 'id', $desc_or_asc = 'ASC') { /*вывод таблицы в массиве*/
		$result = $this->query("SELECT * FROM `$table` ORDER BY `$order_by` $desc_or_asc");
		$i = 0;
		while ($row = $result->fetch_assoc()) {
			$arrTable[$i] = $row;
			$i++;
		}
		return($arrTable);
	}
	function deleteString($table, $id) { /*Удаляет строку с определенным ID*/
		$this->query("DELETE FROM `$table` WHERE `$table`.`id` = $id");
	}
	function nextID($table) { /*Возвращает следующией ID в таблице*/
		$result = $this->query("SELECT * FROM `$table` ORDER BY `$table`.`id` DESC");
			while ($row = $result->fetch_assoc()) {
				$array[] = $row;
			}
		$num = $array[0]['id'];
		$num++;
		return $num;
	}
	function numberRecords($table) { /*Возвращает кол-во записей в таблице*/
		$result = $this->query("SELECT * FROM `$table` ORDER BY `id` DESC");
		return($result->num_rows);
	}
	function searchID($table, $id) { /*Возвращает строку с определенным ID*/
		$result = $this->query("SELECT * FROM `$table` WHERE `id` = $id");
		return($result->fetch_assoc());
	}
	function searchElement($table, $id, $element) { /*Возвращает ряд со строки с определенным ID*/
		$result = $this->query("SELECT * FROM `$table` WHERE `id` = $id");
		$row = $result->fetch_assoc();
		return($row[$element]);
	}
	function unic($table, $row, $element) { /*Уникален ли элемент в ряду таблицы (Допустим, login или email)*/
		$result = $this->query("SELECT * FROM `$table` WHERE `$row` LIKE '$element'");
		if($result->num_rows == 0) return(true); else return(false);
	}
	function searchResult($table, $row, $string, $strictly) { /*Возвращает строки поиска по элементу в определенном ряду*/
		($strictly)?$x = "":$x="%";
		$result = $this->query("SELECT * FROM `$table` WHERE `$row` LIKE '".$x.$string.$x."'");
		$array = array();
		while ($row = $result->fetch_assoc()) {
			$array[] = $row;
		}
		return($array);
	}
}