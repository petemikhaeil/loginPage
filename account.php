<?php
session_start();

    if($_SESSION["loggedIn"] == 0) {
        header('Location: loginIndex.php');
    }
?>
<!DOCTYPE html>
<html>
<body>
<div>
    Hello!
    <form action = "loginPage.php" method = "post">
        <a href="logout.php">Logout</a>
    </form>
</div>
</body>
</html>