<?php
  include "session.php";
?>

<link rel="stylesheet" href="css/home.css">
<h3 class="tamb1">Daftar Data User</h3>
<div class="prbtn">
  <a href="datauser.php?aksi=new"><button>Tambah</button></a>
</div>
<table class="bell">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" class="beda">Nama Lengkap</th>
      <th scope="col" class="beda">Email</th>
      <th scope="col">Pilih Ops</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT tu.nama, tu.email, tu.iduser FROM tbuser tu ORDER BY tu.nama;";
$hasil = mysqli_query($cnn, $sql);
$cx = 0;
while($h = mysqli_fetch_assoc($hasil)){
    $cx++;
?>    
    <tr>
      <th scope="row"><?=$cx?></th>
      <td><?=$h["nama"]?></td>
      <td><?=$h["email"]?></td>
      <td class="btnstyl"><a href="datauser.php?aksi=del&p1=<?=$h["iduser"]?>"><button>Delete</button></a>
      <a href="datauser.php?aksi=edit&p1=<?=$h["iduser"]?>"><button>Edit</button></a></td>
    </tr>
<?php
}
?>
  </tbody>
</table>





 