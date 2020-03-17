<?php
//ตรวจสอบความถูกต้อง 
include('auth.php');
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<!-----------------------------import css--------------------------------------------------------------->
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    <title>MBK</title>
    </head>
    <body>
        <div class ="form">
            <p><?php echo $_SESSION["email"]; ?></p>
            <p>This is homepage and secure area.</p>
            <p><a href ="logout.php">Logout</a></p>
        </div>
    </body>

</html>