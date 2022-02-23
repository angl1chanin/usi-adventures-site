<?php
    session_start();

    require_once '../connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['repeat_password'];
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if ($password === $password_confirm) {

        if (mysqli_num_rows($check_user) == 0) {

            $password = md5(base64_encode($_POST['password']));
    
            mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
    
            $_SESSION['message'] = 'Registration successful';
            header('Location: /index.php');

        } else {
            $_SESSION['message'] = 'User already exist\'s';
            header('Location: /index.php');
        }

        
    } else {
        $_SESSION['message'] = 'Passwords don\'t match';
        header('Location: /index.php');
    }

?>
