<?php
//echo "connect to MySQL flexfreelance ";
$dbhost = "127.0.0.1";
$dbname = "flexfreelance";
$username = "root";
$password = "";

// PDO : назначить использовать UTF-8 по умолчанию в MySQL:
//$db = new PDO("mysql:host=$dbhost; dbname=$dbname;  charset=utf8;", $username, $password);

// еще вариант, как назначить UTF-8 в MySQL:
//new PDO("mysql:host=$dbhost; dbname=$dbname;", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

// charset=utf8;  - установка кодировки utf8

// результат $db - ассоц.массив

try{
	$db = new PDO("mysql:host=$dbhost; dbname=$dbname; charset=utf8;", $username, $password);
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

// а здесь извлекаем из `categories` названия категории по id
function get_category_by_id($id){
	global $db;
	$categories = $db->query("SELECT * FROM categories WHERE id = $id"); 
	foreach($categories as $category){
		return $category["category_name"];
	}
}

// извлекаем из `users` имя автора по id
function get_author_by_id($id){
	global $db;
	$authors = $db->query("SELECT * FROM users WHERE id = $id"); 
	foreach($authors as $author){
		return $author["full_name"];
	}
}

// извлекаем из `users` фоточку автора по id
function get_avatar_author_by_id($id){
	global $db;
	$avatar_authors = $db->query("SELECT * FROM users WHERE id = $id"); 
	foreach($avatar_authors as $avatar_author){
		return $avatar_author["avatar"];
	}
}

// одиночная статья заказа
// flexfreelance/services.php?id=12
function get_sing_by_id($id){
	global $db;
	$sings = $db->query("SELECT * FROM `singles` WHERE id = $id");
	foreach($sings as $sing){
		return $sing;
	}
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