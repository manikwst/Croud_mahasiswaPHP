<?php
    
    $koneksi = mysqli_connect("localhost", "root", "", "webprog");

    $host = "localhost";
    $userk = "root";
    $pass = "";
    $namedb = "webprog";

    $konn = mysqli_connect($host, $userk, $pass, $namedb) or die ("koneksi gagal");

?>