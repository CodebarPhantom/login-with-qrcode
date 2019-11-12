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
  <title>Halaman Admin</title>
</head>
<body>

  <h2>Halo <?= "<u>" . $_SESSION['name'] . "</u>"; ?> anda adalah <?= "<u>" . $_SESSION['role'] . "</u>"; ?></h2>
  <ul>
    <?php
      if ( $_SESSION['role'] == "admin" ) {
    ?>
    <li><a href="./tambahdata.php">Tambah Data</a></li>
    <?php } ?>
    <li><a href="../php/prosesLogout.php">Keluar</a></li>
  </ul>
  
  <?php
    if ( $_SESSION['role'] == "admin" ) {
  ?>
  <h3>DATA AKUN</h3>
  <table width="100%" border="1">
    <thead>
      <th>No</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Role</th>
      <th>Kode QR</th>
      <th>Aksi</th>
    </thead>
    <?php
    
      $sql    = "SELECT * FROM users";
      $users  = mysqli_query($koneksi, $sql);
      $no = 1;

      while( $user = mysqli_fetch_array($users) ) {
        $qrcode = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $user['key_user'];
    ?>
    <tbody style="text-align: center;">
      <td> <?= $no; ?> </td>
      <td> <?= $user['name_user']; ?> </td>
      <td> <?= $user['username_user']; ?> </td>
      <td> <?= $user['role_user']; ?> </td>
      <td><a href="<?= $qrcode; ?>"><img src="<?= $qrcode; ?>" style="width: 10%;"/></a></td>
      <td>
        <a href="../page/editdata.php?id=<?= $user['id_user']; ?>">Edit Data</a> | <a href="../php/prosesHapus.php?id=<?= $user['id_user']; ?>">Hapus Data</a>
      </td>
    </tbody>
    <?php $no++; } ?>
  </table>
  <?php } ?>
</body>
</html>