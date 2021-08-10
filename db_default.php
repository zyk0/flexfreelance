<?php
// подключения к БД db

define('MYSQL_SERVER', 'localhost'); 
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'flexfreelance');


$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Ошибка подключения ".mysqli_error($mysqli));

//запрос к mysql
$def = $link->query("SELECT avatar FROM users ORDER BY id ASC LIMIT 1");
//echo gettype($def);
$def = serialize($def);
echo gettype($def);  
//echo $def;    
  
  
  ////////////////
  
  			<?php		
			require_once "db_default.php";
			echo $def;
			/*
			if(iconv_strlen($_SESSION['user']['avatar']) < 19 ){ 
						echo "<img src=". $def ." class='avatar' alt='avatar' >" ;
					}
			*/		
			?>


?>