<?php
    include "session.php";

    $iduser = $_GET["p1"];
    $sql = "SELECT tu.nama, tu.email, tu.username FROM tbuser tu WHERE tu.iduser='$iduser';";
    $hasil = mysqli_query($cnn, $sql);
    if(mysqli_num_rows($hasil) > 0){
        $h = mysqli_fetch_assoc($hasil);
?>

<link rel="stylesheet" href="css/userdel.css">
    <title>Manik</title>
    <link rel="icon" href="img/manik.png">
    <div class="baner">
        <video autoplay loop muted>
            <source src="video/bc.mp4">
        </video>
    </div>

    <div class="regis">
        <h1 class="tile">Hapus Data <?=$h["username"]?></h1>
        <form method="POST" action="datauser.php">
        <input type="hidden" name="act" value="destroy">
        <input type="hidden" name="iduser" value="<?=$iduser?>">
            <p>Nama Lengkap</p>
            <input type="text" name="txNAMA" class="form_input" value="<?=$h["nama"]?>" required>
            <p>Email</p>
            <input type="email" name="txEMAIL" class="form_input" value="<?=$h["email"]?>" required>
            <p>Username</p>
            <input type="text" name="txUSER" class="form_input" value="<?=$h["username"]?>" required>
            <input type="submit" class="btn1" value="Hapus" onclick="alert('Data berhasil di Hapus')">
        </form>
        <a href="datauser.php"><input type="submit" class="btn2" value="Batal"></a>
    </div>
<?php
    }else{
        echo "<script>window.location.href='datauser.php';</script>";
    }
?>