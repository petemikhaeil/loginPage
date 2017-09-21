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
</div>
</body>
</html>