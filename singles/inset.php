<?php
    $connect = mysqli_connect('localhost', 'root', '', 'flexfreelance');

    if (!$connect) {
        die('Error connect to DataBase');
    }else{
		echo 'connect flexfreelance';
	}
	


?>