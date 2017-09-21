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
    $_SESSION['LoggedIn'] = true;
}

function doShit() {
    createAndFillSession();
    if(verify($_SESSION['name'], $_SESSION['password']) == true) {
        //header('Location: account.php');
    } else {
        header( 'Location: loginIndex.php');
    }
}

doShit();