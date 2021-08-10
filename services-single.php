<?php 
	require_once "db.php";
?>
<?php 
	$sing = get_sing_by_id($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Заказ <?php echo $sing["title"];?></title>
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
			<li class="active"><a href="services-single.php">Заказ <?php echo $sing["title"];?></a></li>
            <li><a href="works.php">Работы</a></li>
            <li><a href="contact.php">Контакты</a></li>
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
	<section class="section">

		<div class="container">
		<div class="row mb-4 align-items-center">

		<div class="col-md-6">
			<p><a class="" href="services.php">Обратно к каталогу "Заказы"</a></p>
			<h2>Заказ <?php echo $sing["title"];?> </h2>
			<div class="shadow p-3 mb-5 bg-white rounded">
				<small>дата:  </small> <?php echo date("d.m.Y", strtotime($sing["date"]));?>
				<br>
				<small>заказ: </small> <?php echo $sing["text"];?>
				<br>
				<small>автор: </small> <?php echo $sing["author"];?>
				<br>
				<!-- barcode -->
				<?php require "bar.php"; ?>
			</div>
		</div>

		<div class="col-md-3 ml-auto">
			<div class="sticky-content">
				<div class="filters">
				<span href="#">Проектирование сайта</span>
				<br>
				<span href="#">Администрирование сервера</span>
				<br>
				<span href="#">Поддержка баз данных</span>
				<br>
				<span href="#">Иллюстрации и анимация</span>
				<br>
				<span href="#">Графический дизайн</span>
				</div>
				<?php require_once "db_sing.php";?>
				<?php 
				$sing12 = get_onesing(); 
				echo $sing12["title"];
				?>
			</div>
		</div>  
		</div>
		</div>
	
	</section>
	</main>
  
  
  <?php require_once "footer.php"; ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>