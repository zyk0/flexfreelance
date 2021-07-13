<?php

    $connect = mysqli_connect('localhost', 'root', '', 'flexfreelance');
	//$mysqli->set_charset("utf8");

    if (!$connect) {
        die('Error connect to DataBase');
    }else{
		echo 'connect flexfreelance';
	}
?>	