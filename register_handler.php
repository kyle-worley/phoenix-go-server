<?php
    session_start();
    $username = $_POST['create_username'];
    $password = $_POST['create_password'];
    $retype_password = $_POST['retype_password'];

    $errors = array();

    if(strlen($username) > 16) {
        $errors[] = "Invalid username: must be 16 or fewer characters.";
    }
    require_once 'Dao.php';
    $dao = new Dao();
    echo "1";
    $users = $dao->getUsers();
    $username_exists = false;
    foreach($users as $user) {
        if(strcomp($user['username'], $username) ==0) {
            $username_exists = true;
        }
    }
    echo "2";
    if($username_exists) {
        $errors[] = "Invalid username: username is already in use.";
    }
    echo "3";
    if(strlen($password) < 8) {
        $errors[] = "Invalid password: must be 8 or more characters.";
    }
    echo "4";
    if(strlen($password) > 32) {
        $errors[] = "Invalid password: must be 32 or fewer characters.";
    }
    echo "5";
    if(strcmp($password, $retype_password) != 0) {
        $errors[] = "Passwords do not match.";
    }
    echo "6";
    if(count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        echo "Errors exist";
        header('Location: register.php');
        exit;
    }
    echo "7";
    $dao->addUser($username, $password);
    $_SESSION['user'] = $username;
    echo "No errors";
    header('Location: index.php');
    exit;
?>