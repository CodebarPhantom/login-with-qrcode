<?php

  include "./koneksi.php";
  session_start();

  if ( isset($_POST['btnSimpanEdit']) ) {
    
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $password   = password_hash($_POST['passwordBaru'], PASSWORD_DEFAULT);
    $role       = $_POST['role'];
    $key        = password_hash($username . $password, PASSWORD_DEFAULT);

    $sql        = "UPDATE users SET name_user='$nama', username_user='$username', password_user='$password', role_user='$role', key_user='$key' WHERE id_user=$id";
    $edit       = mysqli_query($koneksi, $sql);

    if ( $edit ) {
      header("location: ../page/");
    } else {
      header("location: ../page/");
    }

  } else {
    header("location: ../");
  }

?>