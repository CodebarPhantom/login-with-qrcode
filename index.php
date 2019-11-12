<?php

  include "./php/koneksi.php";
  session_start();

  if ( $_SESSION['role'] == "admin" || $_SESSION['role'] == "user" ) {
    header("location: ./page/index.php");
  } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login w/ QR Code</title>
</head>
<body>
  
  <h1>Login With QR Code</h1>
  <form action="./php/prosesLogin.php" method="POST">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username" autocomplete="off">

    <br><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" autocomplete="off">

    <br><br>

    <input type="submit" value="Login" name="btnLogin">
  </form>
  <br>
  <button onclick="openWebcam()">Login w/ QR Code</button>
  
  <br><br>
  
  <canvas style="display: none;"></canvas>
  <form action="./php/prosesLogin.php" method="POST" id="lwb" name="lwb">
    <input type="hidden" name="barcodeCode" id="barcodeCode">
    <input type="submit" value="Login" name="btnLogin" id="btnLogin" style="display: none;">
  </form>

  <script src="./js/qrcodelib.js"></script>
  <script src="./js/webcodecamjs.js"></script>

  <script>    
    function openWebcam() {
      document.querySelector("canvas").style.display = "block";
      var arg = {
        resultFunction: function(result) {
          var barcode = document.querySelector("#barcodeCode").value = result.code;
          document.querySelector("#btnLogin").click();
        }
      };
      new WebCodeCamJS("canvas").init(arg).play();
    }
  </script>
</body>
</html>

<?php } ?>