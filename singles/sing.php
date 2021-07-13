<?php
    session_start();
    require_once 'connect.php';

    $title =  trim(htmlspecialchars($_POST['title'], ENT_QUOTES));
    $text  =  trim(htmlspecialchars($_POST['text'],  ENT_QUOTES));
	$author = $_SESSION['user']['full_name'];

	$category_id = rand(1, 5);
	
    mysqli_query($connect, "INSERT INTO `singles` (`id`, `title`, `text`, `author`, `category_id`, `date`) VALUES (NULL, '$title', '$text', '$author', '$category_id', NOW())");
	
	header('Location: ../profile.php');
?>