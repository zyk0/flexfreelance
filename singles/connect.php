<?php
$connect = mysqli_connect('localhost', 'root', '', 'flexfreelance');

/* 
//проверка соединения 
    if (!$connect) {
        die('Error connect to DataBase');
    }else{
		echo 'connect flexfreelance';
	}
*/

if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}else{
	echo 'connect flexfreelance';
}

mysqli_set_charset($connect, "utf8");

?>