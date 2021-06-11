<?php
    session_start();
    require_once 'connect.php';

    $title =  trim(htmlspecialchars($_POST['title'], ENT_QUOTES));
    $text  =  trim(htmlspecialchars($_POST['text'],  ENT_QUOTES));
	$author = $_SESSION['user']['full_name'];
	
	//echo $author;
	
    mysqli_query($connect, "INSERT INTO `singles` (`id`, `title`, `text`, `author`, `date`) VALUES (NULL, '$title', '$text', '$author', NOW())");
	
	header('Location: ../profile.php');
?>