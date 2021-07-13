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
/*
function get_sing_by_id($id){
	global $db;
		// выборка записей из таблицы `singles` по параметру id
	$sings = $db->query("SELECT * FROM `singles` WHERE id = $id");
		//распарсить массив через цикл 
	foreach($sings as $sing){
		// ретурн одиночную запись
		return $sing;
	}
}
*/
function get_sing_by_id(){
	global $db;
	$sings = $db->query("SELECT * FROM `singles` WHERE id = 12");
	foreach($sings as $sing){
		return $sing;
	}
}

echo '<p>'.'Connect db_sing'.'</p>';
?>