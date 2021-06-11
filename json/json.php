<?php
//$gistjson = file_get_contents("cities.json"); //локальный файл


$gistjson = file_get_contents("https://gist.githubusercontent.com/fielding/bcdab32f19c883016bfcf306857d93a7/raw/b3b5e784fda6d467f757e71543525379b94f3c19/cities.json");
$listobj = json_decode($gistjson,true);      //декодируем строки файла:
/*
$listobj_four = $listobj[40]['country'];
echo $listobj_four;

*/

/*
foreach($listobj as $list ){
	echo "<li>" .$list['country']." <small>".$list['name']."</small></li>";
}

*/

$i = 0;
foreach($listobj as $list ){
	$i++;
	if($i > 240) { // При достижении i > x выводим результат
		echo "<span class='json'>" .$list['name']." <small>(".$list['country'].")</small></span>.   ";
	}
	
}
echo "<br>";

?>