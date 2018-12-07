<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Forum Diskusi Orang Tua</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.png" type="image/x-icon"
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(<?php echo base_url() ?>gambar/slider.jpeg); background-size: cover; ">
 
  <div class="kotak_login">
    <div class="card card-signin my-5" style="padding: 10px; opacity: 0.8;" >
    <!-- <center><img style="height: 100px; width: 100px;"  src="favicon.png"></center> -->
    <p class="tulisan_login" style="font-weight: bold;">Login Forum</p>
    <div>
    </div>
    <form method="post" action="<?php echo base_url('Login/melbu') ?>">

      <label>Username</label>
      <input style="border-radius: 5px;" type="text" name="username" class="form_login" placeholder="Username" required="">
 
      <label>Password</label>
      <input style="border-radius: 5px;" type="password" name="psw" class="form_login" placeholder="Password" required="">
 
      <input type="submit" class="btn btn-success" value="LOGIN" style="width: 100%">
      <center>
        <p style="margin-top: 5%;">Belum punya akun? Silahkan <a href="<?php echo base_url('Daftar') ?>">Daftar</a></p>
      </center>
      <center>
        <a class="link" href="">kembali</a>
      </center>
    </form>
    </div>
  </div>
 
 
</body>
</html>
