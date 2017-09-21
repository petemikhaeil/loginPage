<?php
    if($_SESSION['LoggedIn'] == false) {
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