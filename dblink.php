<?php
//подключение к БД для /about.php
//echo "connect to dblink flexfreelance ";

define('MYSQL_SERVER', '127.0.0.1'); 
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'flexfreelance');
	
//$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
// результат $db - ассоц.массив

$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Ошибка подключения ".mysqli_error($mysqli));


function get_users(){
	global $link; // делаем видимой переменную
	$get_users = $link->query("SELECT * FROM users"); //
	//$get_users = $link->query("SELECT * FROM users ORDER BY id DESC");
	//$get_users = $link->query("SELECT LAST (password) FROM users;  ");
	return $get_users; //вовращает ассоц. 2хуровневый массив
}

?>