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

function createAndFillSession() {
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['loggedIn'] = true;
}

function doShit() {
    if(count($_POST) > 0) {
        $username = (string)$_POST['name'];
        $password = (string)$_POST['password'];
        if (verify($username, $password) == true) {
            createAndFillSession();
            header('Location: account.php');
        } else {
            header('Location: loginIndex.php');
        }
    }
    else {
        return 0;
    }
}

function validate() {
    $username = $_POST['name'];
    $password = $_POST['password'];

}

doShit();