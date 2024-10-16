<?php
    session_start();
    include "koneksi.php";
    include("konfigurasi.php");
?>
    <title>Manik</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="icon" href="img/manik.png">
<div class="baner">
    <video autoplay loop muted>
        <source src="video/bc.mp4">
    </video>
</div>
<link rel="stylesheet" href="css/login.css">
    <div class="logiin">
        <h1>Login form</h1>
        <form action="" method="POST">
            <div class="form_input">
                <input type="text" name="txUSER">
                <span></span>
                <label required>Username</label>
            </div>
            <div class="form_input">
                <input type="passowrd" name="txPASS1">
                <span></span>
                <label required>Password</label>
            </div>
            <input type="submit" value="login" name="prologin" onclick="alert('Selamat Datang')">
            <div class="ragis">
                join member by <a href="registrasi.php">Registrasi</a>
            </div>
        </form>
    </div>

<?php
    if(isset($_POST['prologin'])){
        $sql = mysqli_query($koneksi, "select * from tbuser where username = '$_POST[txUSER]' and passkey = '$_POST[txPASS1]'");

        $cek = mysqli_num_rows($sql);
        if($cek > 0){
            $_SESSION['txUSER'] = $_POST['txUSER'];
            
            echo "<meta http-equiv=refresh content=0;URL='home.php'>";
        }else{
            echo "<p align=center><b> Sandi atau Paswword SALAH! </b></p>";
            echo "<meta http-equiv=refresh content=2;URL='login.php'>";
        }
    }
?>

<?php
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

    if(isset($_POST["act"])){
        $act = $_POST["act"];
        switch ($act){
            case "store":
                $pass1 = $_POST["txPASS1"];
                $pass2 = $_POST["txPASS2"];
                if($pass1 == $pass2){
                    $nama = $_POST["txNAMA"];
                    $email = $_POST["txEMAIL"];
                    $user = $_POST["txUSER"];
                    $iduser = md5($email);
                    $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser) VALUES('$nama', '$email', '$user', '$pass1', '$iduser');";
                    $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil ditambahkan',
                        });
                        </script>";
                    }else{
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal ditambahkan',
                        });
                        </script>";
                    }
                }      
        }
    }

    if(isset($_GET["aksi"])){
        $aksi = $_GET["aksi"];
        switch($aksi) {
            case "new":
                $jdpage = "Tambah";
                $pg = "usernew.php";
        }
    }
?>
