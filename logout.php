<?php
    session_start();
    unset($_SESSION['login']);
    header("location:login2.php");
?>