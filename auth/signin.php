<?php

    session_start();
    require_once 'connect.php';

    $login = trim(htmlspecialchars($_POST['login']));
    $password = trim(htmlspecialchars(md5($_POST['password'])));
    
    // htmlspecialchars() OR real_escape_string () 
    
    //$login = $_POST['login'];
    //$password = $_POST['password'];
    //  hack:  1' or 1=1 -- d
    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
   
    //echo "check_user: <br>";
    //echo "<pre>";
    //print_r($check_user);
    //echo "</pre>";

if (mysqli_num_rows($check_user) > 0) {
    //mysqli_num_rows() — Получает число рядов в результирующей выборке

     $user = mysqli_fetch_assoc($check_user);
    //пребразование в ассоц.масив

    //echo "user: <br>";
    //print_r($user);

     $_SESSION['user'] = [
         "id" => $user['id'],
         "full_name" => $user['full_name'],
         "avatar" => $user['avatar'],
         "email" => $user['email']
     ];
        
     header('Location: ../profile.php');

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../about.php');
}

?>
