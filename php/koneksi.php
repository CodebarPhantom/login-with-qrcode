<?php

  $host       = "localhost";
  $username   = "root";
  $password   = "root";
  $dbname     = "loginBarcode";

  $koneksi    = mysqli_connect($host, $username, $password, $dbname);

  if ( !$koneksi ) {
    echo mysqli_connect_error() . "<br>Koneksi Gagal, Silahkan cek file <i>koneksi.php</i> di dalam folder <i>php</i>";
  }

?>