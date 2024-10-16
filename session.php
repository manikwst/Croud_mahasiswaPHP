<?php
    session_start();
    if(!isset($_SESSION['txUSER'])){
        header("location:login.php");
    }
?>