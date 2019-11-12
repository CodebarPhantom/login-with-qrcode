<?php

  include "./koneksi.php";

  if( isset($_POST['btnSimpan']) ) {

    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role       = $_POST['role'];
    $key        = password_hash($username . $password, PASSWORD_DEFAULT);

    $sql        = "INSERT INTO users (name_user, username_user, password_user, role_user, key_user) VALUES ('$nama', '$username', '$password', '$role', '$key')";

    $simpan    = mysqli_query($koneksi, $sql);  

    if ( $simpan ) {
      header("location: ../page/");
    } else {
      header("location: ../page/tambahdata.php");
    }
  } else {
    header("location: ../");
  }

?>