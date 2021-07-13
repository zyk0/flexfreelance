<?php 
$url = $_SERVER["REQUEST_URI"];
// echo "<p>".$url."</p></br>"; //>> /flexfreelance/order.php
?>

<ul class="activelinklist">
	<li <?php if ($url == "/flexfreelance/index.php")    {echo 'class="activelink"';}?>><a href="index.php">Начальная</a></li>
	<li <?php if ($url == "/flexfreelance/about.php")    {echo 'class="activelink"';}?>><a href="about.php">Регистрация</a></li>
	<li <?php if ($url == "/flexfreelance/services.php") {echo 'class="activelink"';}?>><a href="services.php">Заказы</a></li>
	<li <?php if ($url == "/flexfreelance/works.php")    {echo 'class="activelink"';}?>><a href="works.php">Работы</a></li>
	<li <?php if ($url == "/flexfreelance/contact.php")  {echo 'class="activelink"';}?>><a href="contact.php">Контакты</a></li>
	<li <?php if ($url == "/flexfreelance/order.php")    {echo 'class="activelink"';}?>><a href="order.php">Заявка</a></li>
</ul>






