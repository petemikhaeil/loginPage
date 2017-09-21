<?php
    require('loginPage.php');
    session_start();
    if($_SESSION['loggedIn'] == true) {
        header('Location: account.php');
    }
?>

<!DOCTYPE html>
<html>
<body>
<div>
    <form action = "loginPage.php" method = "post">
        Username: <input name = "name"><br>
        Password: <input name = "password" type = "password"><br>
        <input type="submit">
    </form>
</div>
</body>
</html>

