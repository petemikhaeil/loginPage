<?php

function verify($username, $password) {
    $accountNames = 'Pete';
    $accountPassword = 'hello';
    if($username == $accountNames && $password == $accountPassword) {
        return true;
    } else {
        return false;
    }
}

function createAndFillSession($username, $password) {
    session_start();
    $_SESSION['name'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['loggedIn'] = true;
}

function doShit() {
    if(count($_POST) > 0) {
        $username = (string)$_POST['name'];
        $password = (string)$_POST['password'];
        tryTologIn($username, $password);
    }
    else {
        return 0;
    }
}

function tryToLogIn($username, $password) {

    if (verify($username, $password) == true) {
        createAndFillSession($username, $password);
        header('Location: account.php');
    } else {
        header('Location: loginIndex.php');
    }
}

doShit();