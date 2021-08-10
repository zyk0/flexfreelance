<?php

$dbhost = "127.0.0.1";
$dbname = "flexfreelance";
$username = "root";
$password = "";

try{
	$db = new PDO("mysql:host=$dbhost; dbname=$dbname; charset=utf8;", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
	echo "Ошибка соединения: ", $e->getMessage();
	exit;
}

// одиночная статья заказа
// flexfreelance/services.php?id=1
function get_onesing(){
	global $db;
	     //   выборка записей из таблицы `singles` по параметру id
	$onesings = $db->query("SELECT * FROM `singles` WHERE id = 12");
		//    распарсить массив через цикл 
	foreach($onesings as $onesing){
			// одиночная запись
		return $onesing; 
	}
}

echo '<p>'.'Connect db_sing'.'</p>';
?>