<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Контакты</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.ico" rel="shortcut icon" type="assets/img/favicon.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Navbar ======= -->

  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li><a href="index.php">Начальная</a></li>
            <li><a href="about.php">Регистрация</a></li>
            <li><a href="services.php">Заказы</a></li>
            <li><a href="works.php">Работы</a></li>
            <li class="active"><a href="contact.php">Контакты</a></li>
            <li><a href="order.php">Заявка</a></li>
          </ul>
        </div>
        <?php require_once "nav.php" ?>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">FlexFreelance</a>
      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">
    <section class="section pb-5">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-10">
            <h2>Результаты поиска по каталогу</h2>
          </div>
        </div>
		
		<div class="col-xs-10" style="min-height:250px;">
			<a href="services.php">обратно на страницу заказов</a>
		</div> 
			
			
			
			
<?php 
/*
define('SERVER', '127.0.0.1'); 
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'flexfreelance');	
	
$db_connn = mysqli_connect(SERVER, USER, PASSWORD, DB) or die("Ошибка подключения ".mysqli_error($mysqli));

mysqli_set_charset($db_connn, "utf8");





function connectDB ()
	{ 
	define('MYSQL_SERVER', '127.0.0.1'); 
	define('MYSQL_USER', 'root');
	define('MYSQL_PASSWORD', '');
	define('MYSQL_DB', 'flexfreelance');	
		
	$dbconn = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Ошибка подключения ".mysqli_error($mysqli));

	mysqli_set_charset($dbconn, "utf8");
	echo 'connect !!';
	return $dbconn;
	}
	

function search ($query)
{

	
$text = '';
$query = trim($query); 
$query = strip_tags($query);
//$query = mysqli_real_escape_string($dbconn, $query);
if(!empty($query))
{ 
  if(strlen($query) < 4)
  { 
    $text = '<p>короткий поисковый запрос.</p>';
  } 
  else if(strlen($query) > 18)
  { 
    $text = '<p>длинный поисковый запрос.</p>';
  } 
  else
  { 

global $db_connn;

    $sql = " SELECT * FROM singles WHERE h LIKE '%$query%' OR p LIKE '%$query%' "; // Формируем строку поискового запроса
    $result = mysqli_query($db_connn, $sql); // И выполняем его
	
    $num = mysqli_num_rows($result); // Определим количество найденных совпадений
	echo '$num: '.$num;
    if($num > 0)
	{ //  Если совпадения есть
      $row = mysqli_fetch_assoc($result); // Получаем ассоциативный массив
      $text .= '<p>По вашему запросу  <strong>'.$query.'</strong>'; // И начинаем формировать строку поисковой выдачи
      $text .= ' найдено '.$num.' совпадений</p> ' ; // Показываем количество совпадениц

      do{ // Динамический вывод всех совпадений
        $text .= '<h3>'.$row['h'].'</h3>';
        $text .= '<p>'.nl2br($row['p']).'</p>';}
      while($row = mysqli_fetch_assoc($result));
	  } //  Делаем это пока у нас есть результаты
    else{ // Если найти совпадение не удалось
      $text = '<p>По вашему запросу ничего не найдено.</p>';}}
	  } // Сообщение о неудаче
  else{ // Если запрос был пустой
    $text = '<p>Задан пустой поисковый запрос.</p>';} // Сообщение об ошибке
return $text;
} // 


if(isset($_POST['query']))
{ 
  $connect = connectDB(); 
  $search_result = search($_POST['query']);
  echo $search_result; 
}

*/
  
//connectDB();
?>
			
      </div>
    </section>
  </main>
  
  
  <?php require_once "footer.php"; ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>  