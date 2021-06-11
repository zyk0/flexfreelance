<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Заявка</title>
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
  <!-- <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/form.css" rel="stylesheet">
  
              <?php
              header("Content-type: text/html; charset=utf-8");
              error_reporting(-1);
              require_once 'order_function.php';

              if(!empty($_POST)) {
                  save_mess();
                  header("Location: {$_SERVER['PHP_SELF']}"); //редирект
                  exit;// можно die();
              }

              $messages = get_mess();
              $messages = array_mess($messages);
              //print_arr($messages); //распечатка  массива

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
            <li><a href="contact.php">Контакты</a></li>
            <li class="active"><a href="order.php">Заказ</a></li>
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

            <h2>Быстрая заявка</h2>
            
             <div><?php require_once "navbar.php"; ?></div>
            
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 ml-auto order-2">

                
                
              <!--<p><input type="submit" value="Отправить информацию"></p>-->
              <!--
                вместо get_format_message() можно бы и  использовать 
                explode( '|' , $message ) — Разбивает строку с помощью разделителя
                explode ( разделитель , строка )


                nl2br() вставляет тег <br /> (разрыв строки) 
                перед каждым переводом строки (\n, \r\n , \n\r).

                htmlspecialchars() — Преобразует специальные символы в HTML-сущности
                -->
                
                <?php foreach($messages as $message): ?>
                    <?php $message = get_format_message($message); ?>
                    <div class="message">
                        <p>Автор: <span class="order_autor"><?php echo $message[0]?> </span></p>
                        <p>Связаться: <i><?php echo $message[1]?></i></p>
                        <div>Заказ: <span class="order_message"><?php echo nl2br(htmlspecialchars($message[2]))?></span></div>
                        <p><small>Дата: <?php echo $message[3]?></small></p>
                        
                    </div>
                <?php endforeach; ?>
            </form>
          </div>

          <div class="col-md-6 mb-5 mb-md-0">
		  <h3 class="h3 mb-4">Заявка на заказ</h3>

            <form action="order.php" method="post">
              
              <fieldset>
                <legend></legend>
                <p><i>Пожалуйста, заполните форму. </i></p>
                
                  <label for="name">Имя </label>
                  <input type="text" name="name" id="name" required placeholder="ваше имя"><br>
                  
                  <label for="email">Email </label>
                  <input type="email" name="email" id="email" required placeholder="почтовый ящик"><br>

                  <label for="comments">Заявка </label>
                  <textarea type="text" name="text" id="text" required placeholder="опишите заказ"></textarea>
              
                  <button class="order_button" type="submit">Опубликовать </button>
                </fieldset>
		
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php
    require_once "footer.php";
    ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
