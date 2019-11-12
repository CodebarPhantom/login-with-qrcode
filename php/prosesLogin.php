<?php

  include "./koneksi.php";
  session_start();

  if ( isset($_POST['btnLogin']) ) {
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $barcode  = $_POST['barcodeCode'];

    $sql          = "SELECT * FROM users WHERE username_user='$username'";
    $masuk        = mysqli_query($koneksi, $sql);
    $sqlBarcode   = "SELECT * FROM users WHERE key_user='$barcode'";
    $masukBarcode = mysqli_query($koneksi, $sqlBarcode);

    $masukBiasa = mysqli_num_rows($masuk);
    $masukBarcodeDong = mysqli_num_rows($masukBarcode);


    if ( $masukBiasa > 0 || $masukBarcodeDong > 0 ) {
      if ( $masukBiasa > 0 ) {
        $user             = mysqli_fetch_array($masuk);
      }
      if ( $masukBarcodeDong > 0 ) {
        $user             = mysqli_fetch_array($masukBarcode);
      }
      
      $_SESSION['name']       = $user['name_user'];
      $_SESSION['role']       = $user['role_user'];
      $_SESSION['password']   = $user['password_user'];
      $_SESSION['key']        = $user['key_user'];

      if ( password_verify($password, $_SESSION['password']) || $barcode == $_SESSION['key'] ) {
        header("location: ../page/index.php");
      } else {
        header("location: ../");
      }
    } else {
      header("location: ../");
    }
  } else {
    header("location: ../");
  }
 
?>