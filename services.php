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
      </a>

    </div>
  </nav>

  <main id="main">
    <section class="section">
      <div class="container">
		  <div class="row mb-5 align-items-center">
			  <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
				<h2>Каталог заказов </h2>
				<p class="mb-0">freelance биржа </p>
			  </div>
			  <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
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
			  </div>
		  </div>
      </div>

      <div class="site-section pb-0">
        <div class="container">

          <div class="row">
            
            <?php $onesingles = get_singles_all(); ?>
            <?php foreach($onesingles as $onesingle): ?>
			
			<!-- категории -->
			<?php $category_name = get_category_by_id($onesingle["category_id"]); ?>
			<!-- автор заказа -->
			<?php $author_name = get_author_by_id($onesingle["users_id"]); ?>
			
			<!-- аватарка автора -->
			<?php $avatar_author = get_avatar_author_by_id($onesingle["users_id"]); ?>
			
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" >
			<span><i class="icofont-check"></i></span> 
                <div class=''>  
                    
					<!-- динамическая ссылка на отдельный заказ -->
                    <a target="_blank" href="/flexfreelance/services-single.php?id=<?php echo $onesingle["id"]; ?> ">
						<h4 class="h4 mb-2">
							<p> onesingle["title"]: <?php echo $onesingle["title"]?> </p>
						</h4>
					</a>	
                    <p>onesingle["id"]: <?php echo $onesingle["id"]."#" ?></p>
                    
                    <!-- <small>$onesingle["date"]: < ?php echo $onesingle["date"]? ></small>--> 
					<!-- 2021-07-12 -->
					<br>
					<small>$onesingle["date"]: <?php echo date("d.M.Y", strtotime($onesingle["date"]));?></small>
					<!-- 12.Jul.2021 -->
					<p>$category_name: <a href="#!"><?php echo $category_name ?></a> </p>
					
					<p>onesingle["author"] опубликован:<b> <?php echo $onesingle["author"] ?></b></p>
					<p>$author_name:  <a href="#"><?php echo $author_name ?></a> </p>
					
					<span class="la la-3x mb-4">
					<?php echo "<img src=". $avatar_author ." "."width='60' height='80'>"  ?>
					</span>  
					
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
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  
  <script src="assets/js/main.js"></script>

</body>
</html>
