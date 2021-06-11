<?php
//echo "connect to MySQL flexfreelance ";
$dbhost = "127.0.0.1";
$dbname = "flexfreelance";
$username = "root";
$password = "";
	
//$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
// результат $db - ассоц.массив

try{
	$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//исключения	
}catch (PDOException $e){
	echo "Ошибка соединения: ", $e->getMessage();
	exit;
}

//получаем все статьи из табл. singles
function get_singles_all(){
	global $db; // делаем видимой переменную
	$singles = $db->query("SELECT * FROM singles"); //выбрать все из табл 'singles'
	return $singles; 
	// return PDOstatement, который можно перебрать в цикле  
	//вовращает ассоц. 2хуровневый массив
}

function get_singles_test(){
	global $db; // делаем видимой переменную
	$singles_test = $db->query("SELECT * FROM singles", PDO::FETCH_ASSOC); //выбрать все из табл 'singles'
	// return $singles_test; 

	var_dump($singles_test);
	var_dump($singles_test->fetchAll());
	//foreach($singles_test as $singly_test ){
	//  return $singly_test; //
	//}
}

	
  // Ф-ция подключения к БД db
  /*
  define('MYSQL_SERVER', 'localhost'); 
  define('MYSQL_USER', 'root');
  define('MYSQL_PASSWORD', '');
  define('MYSQL_DB', 'flexfreelance');
  
  mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Ошибка подключения ".mysqli_error($mysqli));
  require_once('db.php');
  */
  
	//mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
	//Устанавливает соединение с сервером MySQL
	//require_once('db.php');
	//подключает файл db.php к скрипту.
	
	/*
	$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
 
	//другой вариант обработки ошибок при подключени к mysql:
	if($link->connect_error){
		echo 'Error: '. $link->connect_error;
	}
	*/

?>