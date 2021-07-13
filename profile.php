<?php
	session_start();
	if (!$_SESSION['user']) {
		header('Location: about.php');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Профиль</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body>

  <!-- ======= Navbar ======= -->

  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li><a href="index.php">Начальная</a></li>
            <li class="active"><a href="about.php">Регистрация</a></li>
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

    <section class="section pb-5">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6">
            <h2>Профиль</h2>
            <p class="mb-0"></p>
			<p class="mb-0"><?php require_once "authnav.php"; ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 ml-auto order-2">
            <h3 class="h3 mb-4">Профиль автора</h3>
            <ul class="list-unstyled">
			<!--
              <li class="mb-3">
				<form method="POST">
				  <div class="form-group">
					<label for="exampleInputEmail1">Логин</label>
					<input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="напечатайте логин">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="напечатайте пароль">
				  </div>
				  <input type="submit" name="registr" value="Зарегистрироваться" class="btn btn-primary"></input>
				</form>
              </li>
			  -->

			<!-- Профиль -->
			<div>
				<img src="<?= $_SESSION['user']['avatar'] ?>" class="avatar" alt="avatar">
				<h3 class="profile"><?= $_SESSION['user']['full_name'] ?></h3>
				<p><?= $_SESSION['user']['email'] ?><p>
				<div><a href="auth/logout.php" class="logout">Выход из профиля</a></div>
			</div>
			  
            </ul>
          </div>

		  <div class="col-md-6 mb-5 mb-md-0">
		  <p>Добро пожаловать, <?= $_SESSION['user']['full_name'] ?>!</p>
            <p>Это личный кабинет, 
			<br>
			здесь вы можете размещать информацию о своих заказах.</p>
			<p><br><br></p>

			
            <p><br><br></p>
		  	<form action="singles/sing.php" method="post">
				<label>название</label>
				<input type="text" name="title" placeholder="напечатайте названиие" minlength="2" maxlength="25" required>
				
				<label>описание</label>
				<input type="text" name="text" placeholder="напечатайте краткое описание заказа" minlength="12" maxlength="125" required>
				
				<button type="submit">Опубликовать</button>
			</form>
		  </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
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