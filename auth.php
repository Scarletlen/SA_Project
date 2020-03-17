<?php

    session_start();
    if(!isset($_SESSION['email'])){
        //no mail ให้ go to login
        header("Location: index.php");
        exit();
    }
?>