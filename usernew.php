<?php
    include "session.php";
?>

 <link rel="stylesheet" href="css/usernew.css">
    <title>Manik</title>
    <link rel="icon" href="img/manik.png">
    <div class="baner">
        <video autoplay loop muted>
            <source src="video/bc.mp4">
        </video>
    </div>

    <div class="regis">
        <h1 class="tile">Tambah Data</h1>
        <form method="POST" action="datauser.php">
        <input type="hidden" name="act" value="store">
            <p>Nama Lengkap</p>
            <input type="text" name="txNAMA" class="form_input" required>
            <p>Email</p>
            <input type="email" name="txEMAIL" class="form_input" required>
            <p>Username</p>
            <input type="text" name="txUSER" class="form_input" required>
            <p>Password</p>
            <input type="password" name="txPASS1" class="form_input" required>
            <p>Verifikasi Password</p>
            <input type="password" name="txPASS2" class="form_input" required>
            <input type="submit" class="btn1" value="Tambah" onclick="alert('Data berhasil di Tambah')">
        </form>
        <a href="datauser.php"><input type="submit" class="btn2" value="Batal"></a>
    </div>