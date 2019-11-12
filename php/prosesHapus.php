<?php

  include "./koneksi.php";
  session_start();

  $id     = $_GET['id'];

  $sql    = "DELETE FROM users WHERE id_user='$id'";
  $hapus  = mysqli_query($koneksi, $sql);

  if ( $hapus ) {
    header("location: ../page/");
  } else {
    header("location: ../page/");
  }

?>