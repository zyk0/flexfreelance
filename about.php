<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Авторизация</title>
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
            <li><a href="order.php">Заказ</a></li>
          </ul>
        </div>
        <?php require_once "nav.php" ?>
        <!--
        <div class="col-md-6 d-none d-md-block  mr-auto">
          <div class="tweet d-flex">
            <span class="icofont-twitter text-white mt-2 mr-3"></span>
            <div>
              <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis explicabo inventore. <br> <a href="#">t.co/v82jsk</a></em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <h3>Hire Me</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiisexplicabo inventore. <br> <a href="#">myemail@gmail.com</a></p>
        </div>
        -->
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
            <h2>Авторизация</h2>
            <p class="mb-0">
                <?php require_once "authnav.php"; ?>
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 ml-auto order-2">
            <h3 class="h3 mb-4">Форма авторизации</h3>
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


<!-- Форма авторизации -->

            <form action="auth/signin.php" method="post">
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин" autocomplete="off" minlength="2" maxlength="15" required>
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль" autocomplete="off" minlength="2" maxlength="15" required>
                <button type="submit">Авторизоваться</button>
                <p>
                    У вас нет аккаунта?  <a href="register.php">Зарегистрируйтесь</a>!
                </p>
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                    unset($_SESSION['message']);
                ?>
            </form>
              
            </ul>
          </div>

          <div class="col-md-6 mb-5 mb-md-0">
            <p><img src="assets/img/person_2.jpg" alt="Image" class="img-fluid"></p>

           
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->
  <?php
    require "footer.php";
    ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
