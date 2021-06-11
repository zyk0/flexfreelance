<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Заказы</title>
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
  <?php	require_once "db.php"; ?>
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
            <li class="active"><a href="services.php">Заказы</a></li>
            <li><a href="works.php">Работы</a></li>
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
          <div class="col-md-6" >

            <h2>Каталог заказов</h2>
            <p>Каталог заказов</p>

          </div>

        </div>
      </div>

      <div class="site-section pb-0">
        <div class="container">

          <div class="row">
            
            <?php $onesingles = get_singles_all(); ?>
            <?php foreach($onesingles as $onesingle): ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" >
			<span><i class="icofont-check"></i></span> 
                <div class=''>  
                    <!--<span class="la  la-3x mb-4">< ? = "<img src=". $onesingle['img']." "."alt='img' width='60' height='40'>"  ? ></span>    -->  
                    <h4 class="h4 mb-2"><p>onesingle["title"]: <?php echo $onesingle["title"]?> </p></h4>
                    <p>onesingle["id"]: <?php echo $onesingle["id"]."#" ?></p>
                    <p>onesingle["author"] опубликован:<b> <?php echo $onesingle["author"] ?></b></p>
                    <small>$onesingle["date"]: <?php echo $onesingle["date"]?></small>
					<br><br>
					<p>onesingle["text"].  публикация:</p>
                    <ul class="list-unstyled list-line">
                        
                        <li> <?php echo $onesingle["text"]?> </li>
                    </ul>
                    
                </div>
            </div>
            <?php endforeach; ?>
            
            
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" >
              <span class="la la-image la-3x mb-4"></span>
              <h4 class="h4 mb-2">Graphic Design</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
              <ul class="list-unstyled list-line">
                <li>Magnam soluta quod</li>
              </ul>
            </div>
            
            
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" >
              <span class="la la-search la-3x mb-4"></span>
              <h4 class="h4 mb-2">SEO</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
              <ul class="list-unstyled list-line">
				<li>Cumque quae aliquam</li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php require_once "footer.php"; ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/js/main.js"></script>

</body>
</html>
