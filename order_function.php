<?php

function save_mess(){
	$str = $_POST['name'] . '|' . $_POST['email'] . '|'. $_POST['text'] . '|' . date('Y-m-d H:i:s'). '|' .$_SERVER["REMOTE_ADDR"] ."\n***\n";
	// записыватся данные из $_POST['name'] и из $_POST['text']
	file_put_contents('gb.txt', $str, FILE_APPEND);
	//file_put_contents() — Пишет данные в файл
	//file_put_contents ( Путь К файлу, Запис-мые данные(string, array) , FILE_APPEND )...
		//FILE_APPEND - Если файл уже существует, данные будут дописаны в конец файла 
		//вместо того, чтобы его перезаписать.
}

function get_mess(){
	return file_get_contents('gb.txt');
	//file_get_contents() — Читает содержимое файла и помещает его в строку
	//еещ есть     file() - Читает содержимое файла и помещает его в массив
}

function array_mess($messages){
	$messages = explode("\n***\n", $messages);
	// explode — Разбивает строку с помощью разделителя,
	// 		и возвращает массив строк.
	// explode ( Разделитель , Входная строка )
	//return $messages;
	array_pop($messages);
	//return $messages;
		//array_pop() - возвращает последний элемент массива
	return array_reverse($messages);
}


function get_format_message($message){
	return explode('|', $message);
	//explode() — Разбивает строку с помощью разделителя
	// Возвращает массив строк
}

function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
	// print_r() — Выводит удобочитаемую информацию о переменной
	// print_r(..., true) вернёт информацию вместо вывода в браузер
}

?>