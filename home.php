<?php
  include "session.php";
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Manik</title>
    <link rel="icon" href="img/manik.png">
    <link rel="stylesheet" href="css/home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="baner">
    <video autoplay loop muted>
        <source src="video/bc.mp4">
    </video>
</div>
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
      <nav class="container2">
          <div class="padi">
              <div class="boxx b1">I Komang Manik Wastika</div>
              <div class="boxx b2">Yuuma</div>
              <div class="boxx b3">I Komang Manik Wastika</div>
              <div class="boxx b4">Yuuma</div>
              <div class="boxx b5">I Komang Manik Wastika</div>
          </div>
      </nav>
    </div>
    <div class="pembung">
      <span class="text1">Welcome</span>
      <span class="text2">in M. University</span>
    </div>
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