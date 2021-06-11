<?php
    session_start();
    require_once 'connect.php';
    
    $full_name = trim(htmlspecialchars($_POST['full_name']));
    $login =     trim(htmlspecialchars($_POST['login']));
    $email =     trim(htmlspecialchars($_POST['email']));
    $password =  trim(htmlspecialchars($_POST['password']));
    $password_confirm = trim(htmlspecialchars($_POST['password_confirm']));

if ($password === $password_confirm) {

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    //move_uploaded_file — Перемещает загруженный файл в новое место
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        header('Location: ../register.php');
    }
        
    //если не загружена аватарка:
    //if(!iset($_FILES['avatar']['name'])){$path = $path + defaul.png;}
        
    //MD5
    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../about.php');


} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}

?>
