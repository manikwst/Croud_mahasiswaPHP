<?php
    include("konfigurasi.php");

    $jdpage = "List";
    $pg = "userlist.php";
    $footer = "";

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
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }else{
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }
                }   

                break;
            case "update":
                $pass1 = $_POST["txPASS1"];
                $pass2 = $_POST["txPASS2"];
                if($pass1 == $pass2){
                    $nama = $_POST["txNAMA"];
                    $email = $_POST["txEMAIL"];
                    $user = $_POST["txUSER"];
                    $iduser = $_POST["iduser"];
                    $sql = "UPDATE tbuser SET nama='$nama', email='$email', username='$user', passkey='$pass1' WHERE iduser='$iduser';";
                    $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }else{
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }
                }   
                break;
            case "destroy":
                $iduser = $_POST['iduser'];
                $sql = "DELETE FROM tbuser WHERE iduser='$iduser';";
                $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }else{
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }
                break;
        }
    }

    if(isset($_GET["aksi"])){
        $aksi = $_GET["aksi"];
        switch($aksi) {
            case "new":
                $jdpage = "Tambah";
                $pg = "usernew.php";
                break;
            case "edit":
                $jdpage = "Ubah";
                $pg = "useredit.php";
                break;
            case "del":
                $jdpage = "Hapus";
                $pg = "userdel.php";
                break;
            default:
                $jdpage = "List";
                $pg = "userlist.php";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Manik</title>
    <link rel="icon" href="img/manik.png">
    <link rel="stylesheet" href="css/datauser.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="img/manikreal.jpg" alt="">
      <span class="logo_name">M. University</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="home.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Table Data</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Table Data</a></li>
          <li><a href="datauser.php">Data User</a></li>
          <li><a href="#">Data Mahasiswa</a></li>
          <li><a href="#">Data Dosen</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">praSemester</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">praSemester</a></li>
          <li><a href="#">Semester 1</a></li>
          <li><a href="#">Semester 2</a></li>
          <li><a href="#">Semester 3</a></li>
          <li><a href="#">Semester 4</a></li>
          <li><a href="#">Semester 5</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">pengajuan</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Pengajuan</a></li>
          <li><a href="#">Cuti</a></li>
          <li><a href="#">Tambah Kelas</a></li>
          <li><a href="#">End</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Penjumlahan</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Penjumlahan</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Kemajuan</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Kemajuan</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Ketikan</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Ketikan</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting Web</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting Web</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content"></div>
          <div class="name-job">
            <div class="profile_name">Log Out</div>
          </div>
          <a href="login.php"><i class='bx bx-log-out' ></i></a>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <?php
        include($pg);
    ?>
  </section>

  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>









<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manik</title>
    <link rel="icon" href="img/manik.png">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
        <nav class="container2">
            <div class="padi">
                <div class="boxx b1">I Komang Manik Wastika</div>
                <div class="boxx b2">Yuuma</div>
                <div class="boxx b3">I Komang Manik Wastika</div>
                <div class="boxx b4">Yuuma</div>
                <div class="boxx b5">I Komang Manik Wastika</div>
            </div>
        </nav>

        <div class="container konten">
        </div>

    </body>
</html> -->