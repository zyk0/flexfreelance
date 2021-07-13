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
    <?php
    require_once __DIR__.'/vendor/autoload.php';
    use Faker\Factory as Faker;
    $faker = Faker::create('ru_RU');
    //$faker = Faker\Factory::create();
    
    session_start();
    ?>
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
          <div class="col-md-6">
            <h2>Форма обратной связи</h2>
            <p class="mb-0">Корректно заполните поля. И мы ответим на ваше сообщение.
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">

            <form action="#" method="#" role="form" class="">
            
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Имя</label>
                  <input type="text" name="username" class="form-control" id="name" placeholder="напечатайте имя" data-rule="minlen:4" data-msg="Please enter at least 4 chars" readonly/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="напечатайте почту" data-rule="email" data-msg="Please enter a valid email" readonly/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Тема</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="напечатайте тему сообщения" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" readonly/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Сообщение</label>
                  <textarea class="form-control" name="message" placeholder="напечатайте сообщение" cols="10" rows="5" data-rule="required" data-msg="Please write something for us" readonly></textarea>
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group">
                  <button type="submit" class="readmore d-block w-100" disabled>отправить</button>
                </div>
              </div>

            </form>

          </div>

          <div class="col-md-4 ml-auto order-2">
          <strong class=""><h4>Для связи</h4></strong>
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Почтовый адрес</strong>
                <address>
                  <span><?php echo $faker->address()." " ?></span>
                </address>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Телефон</strong>
                <span><?php echo $faker->e164PhoneNumber(); ?></span>
                <br>
                <span><?php echo $faker->phoneNumber(); ?></span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span><?php echo $faker->email(); ?></span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Платежные реквизиты</strong>
                <span><?php echo $faker->creditCardType(); ?></span>
                </br>
                <span><?php  echo $faker->creditCardNumber('Visa', true)." до ".$faker->creditCardDetails()["expirationDate"];?></span>
                <p>
                <?php 
                    echo $faker->creditCardDetails()["name"]."<br>";
                    //echo "До ".$faker->creditCardDetails()["expirationDate"]."<br>";
                    echo "SWIFT/BIC number: ".$faker->swiftBicNumber();
                ?>
                </p>
              </li>
            </ul>
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
