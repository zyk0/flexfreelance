<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Работа</title>
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
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

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
            <li class="active"><a href="works.php">Работы</a></li>
            <li><a href="contact.php">Контакты</a></li>
			<li><a href="order.php">Заказ</a></li>
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
          <div class="col-md-6" data-aos="fade-up">
            <h2>Debian</h2>
            <p>Debian is a stable and secure Linux based operating system.</p>
			<p>Debian has extensive hardware support.</p>
          </div>
        </div>
      </div>

     <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="assets/img/debian.png" alt="debian" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3">Debian</h3>
                <p class="mb-4"><span class="text-muted">Используют OS Debian:</span></p>

                <div class="mb-5">
				<p>
				<?php require "json/jsonplace.php"; ?>
				</p>
                </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
	</div>
	
	 <div class="container">
        <div class="row mb-12 align-items-center">
          <div class="col-md-12" >
            <h2>Заказчики из следующих локаций:</h2>
			<?php require "json/json.php"; ?>
          </div>
        </div>
      </div>
	
    </section>

    <?php  require_once "slider.php";  ?>

  </main>
  <?php require_once "footer.php"; ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/minor.js"></script>

</body>

</html>