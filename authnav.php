<?php 
$url = $_SERVER["REQUEST_URI"];
// echo "<p>".$url."</p></br>"; //>> /flexfreelance/order.php
?>


<ul class="activelinklist">
<!--
	<li <?php if ($url == "/flexfreelance/index.php")    {echo 'class="activelink"';}?>><a href="index.php">home</a></li>
	
	<li <?php if ($url == "/flexfreelance/services.php") {echo 'class="activelink"';}?>><a href="services.php">services</a></li>
	<li <?php if ($url == "/flexfreelance/works.php")    {echo 'class="activelink"';}?>><a href="works.php">works</a></li>
	<li <?php if ($url == "/flexfreelance/contact.php")  {echo 'class="activelink"';}?>><a href="contact.php">contact</a></li>
	<li <?php if ($url == "/flexfreelance/order.php")    {echo 'class="activelink"';}?>><a href="order.php">order</a></li>
-->
	
	<li <?php if ($url == "/flexfreelance/about.php")    {echo 'class="activelink"';}?>><a href="about.php">авторизация</a></li>
	<li <?php if ($url == "/flexfreelance/register.php") {echo 'class="activelink"';}?>><a href="register.php">регистрация</a></li>
	<li <?php if ($url == "/flexfreelance/profile.php")  {echo 'class="activelink"';}?>><a href="profile.php">профиль</a></li>
</ul>






