<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Начальная</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<!--    
  <meta http-equiv="Refresh" content="120" />
  автообновления
-->  
    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.ico" rel="shortcut icon" type="assets/img/favicon.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet"> 
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
            <li class="active"><a href="index.php">Начальная</a></li>
            <li><a href="about.php">Регистрация</a></li>
            <li><a href="services.php">Заказы</a></li>
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

    <!-- ======= Clients Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">Технологии Linux</h3>
            <p>Следующие дистрибутивы 
			</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/debian.svg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/fedora.svg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/centos.svg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/redhat.svg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/ubuntu.svg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/mint.svg" alt="Image" class="img-fluid"></a>
          </div>

        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">Сервисы</h3>
            <p>	</p>
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <span class="la la-3x mb-4"><i class="icofont-network"></i></span>
            <h4 class="h4 mb-2">NGINX web server</h4>
            <p>NGINX Service Mesh is the lightest, easiest way to implement mTLS and end-to-end encryption in Kubernetes.</p>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <span class="la la-3x mb-4"><i class="icofont-network"></i></span>
            <h4 class="h4 mb-2">RabbitMQ</h4>
            <p>RabbitMQ is the most widely deployed open source message broker.</p>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <span class="la la-3x mb-4"><i class="icofont-network"></i></span>
            <h4 class="h4 mb-2">Heroku cloud computing</h4>
            <p>Data on Heroku Build data-driven apps with fully managed data services.</p>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
			<span class="la la-3x mb-4"><i class="icofont-network"></i></span>
            <h4 class="h4 mb-2">Fastly</h4>
            <p>Build, secure, and deliver more powerful websites and applications with Fastly's edge cloud platform..</p>
          </div>
		  
        </div>
      </div>
    </section><!-- End Services Section -->

    <!--  Slider  -->
    <?php  require_once "slider.php";  ?>
    <!-- Slider -->

  </main><!-- End #main -->
  <?php require_once "footer.php"; ?>    

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/minor.js"></script>

</body>

</html>
