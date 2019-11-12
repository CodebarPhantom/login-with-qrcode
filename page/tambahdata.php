<?php
  include "../php/koneksi.php";
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Data - Halaman Admin</title>
</head>
<body>

  <h2>Halo <?= "<u>" . $_SESSION['name'] . "</u>"; ?> anda adalah <?= "<u>" . $_SESSION['role'] . "</u>"; ?></h2>
  <ul>
    <?php
      if ( $_SESSION['role'] == "admin" ) {
    ?>
    <li><a href="./">Lihat Data</a></li>
    <?php } ?>
    <li><a href="../php/prosesLogout.php">Keluar</a></li>
  </ul>
  
  <?php
    if ( $_SESSION['role'] == "admin" ) {
  ?>
  <h3>TAMBAH DATA</h3>
  <form action="../php/prosesTambahData.php" method="POST">
    <label for="nama">Nama Lengkap</label> <br>
    <input type="text" name="nama" id="nama" autocomplete="off"> <br><br>

    <label for="username">Username</label> <br>
    <input type="text" name="username" id="username" autocomplete="off"> <br><br>

    <label for="password">Password</label> <br>
    <input type="password" name="password" id="password" autocomplete="off"> <br><br>

    <label for="role">Role</label> <br>
    <input list="roledata" name="role" id="role" autocomplete="off"> <br><br>
    <datalist id="roledata">
      <option value="admin">
      <option value="user">
    </datalist>

    <input type="submit" value="Simpan" name="btnSimpan">
  </form>
  <?php } ?>
</body>
</html>