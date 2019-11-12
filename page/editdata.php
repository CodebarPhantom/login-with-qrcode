<?php
  include "../php/koneksi.php";
  session_start();
  
  $id   = $_GET['id'];
  $sql  = "SELECT * FROM users WHERE id_user='$id'";
  $edit = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_array($edit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Data - Halaman Admin</title>
</head>
<body>

  <h2>Halo <?= "<u>" . $_SESSION['name'] . "</u>"; ?> anda adalah <?= "<u>" . $_SESSION['role'] . "</u>"; ?></h2>
  <ul>
    <?php
      if ( $_SESSION['role'] == "admin" ) {
    ?>
    <li><a href="./">Lihat Data</a></li>
    <li><a href="./tambahdata.php">Tambah Data</a></li>
    <?php } ?>
    <li><a href="../php/prosesLogout.php">Keluar</a></li>
  </ul>
  
  <?php
    if ( $_SESSION['role'] == "admin" ) {
  ?>
  <h3>EDIT DATA</h3>
  <form action="../php/prosesEditData.php" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">

    <label for="nama">Nama Lengkap</label> <br>
    <input type="text" name="nama" id="nama" autocomplete="off" value="<?= $data['name_user']; ?>"> <br><br>

    <label for="username">Username</label> <br>
    <input type="text" name="username" id="username" autocomplete="off" value="<?= $data['username_user']; ?>"> <br><br>

    <label for="passwordBaru">Password Baru</label> <br>
    <input type="password" name="passwordBaru" id="passwordBaru" autocomplete="off"> <br><br>

    <label for="role">Role</label> <br>
    <input list="roledata" name="role" id="role" autocomplete="off" value="<?= $data['role_user']; ?>"> <br><br>
    <datalist id="roledata">
      <option value="admin">
      <option value="user">
    </datalist>

    <input type="submit" value="Simpan" name="btnSimpanEdit">
  </form>
  <?php } ?>
</body>
</html>