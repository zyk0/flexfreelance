<?php
/*
$dbhost = "127.0.0.1";
$dbname = "flexfreelance";
$username = "root";
$password = "";

try{
	$db_cat = new PDO("mysql:host=$dbhost; dbname=$dbname; charset=utf8;", $username, $password);
	$db_cat->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
	echo "Ошибка соединения: ", $e->getMessage();
	exit;
}

echo '<p>'.'Connect db_category'.'</p>';

//список категорий
function get_categories(){
	global $db_cat;
	     //   выборка записей из таблицы `categories` 
	$categories = $db_cat->query("SELECT * FROM `categories` ");
		//    распарсить массив через цикл 
	foreach($categories as $categori){
			// одиночная запись
				print_r( $categori ); 
			//return $categori; 	
	}
}
*/


define('MYSQL_SERVER', '127.0.0.1'); 
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'flexfreelance');

$db_cat = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Ошибка подключения ".mysqli_error($mysqli));

mysqli_set_charset($db_cat, "utf8");

function get_categories(){
	global $db_cat; // делаем видимой переменную
	//$categors = $db_cat->query("SELECT * FROM `categories` ");
	$categors = $db_cat->query("SELECT * FROM `categories` ORDER BY `categories`.`id` ASC");
	
	return $categors; //вовращает ассоц. 2хуровневый массив

	//print_r($categors); // >>object
}
?>