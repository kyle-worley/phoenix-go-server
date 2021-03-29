<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $errors = array();

    require_once 'Dao.php';
    $dao = new Dao();
    $users = $dao->getUsers();
    foreach($users as $user) {
        if(strcmp($user['username'], $username) ==0) {
            if(strcmp($user['password'], $password) ==0) {
                $_SESSION['user'] = $username;
                header('Location: index.php');
                exit;
            }
        }
    }

    $errors[] = "Invalid username/password.";
    $_SESSION['errors'] = $errors;
    header('Location: login.php');
    exit;
?>