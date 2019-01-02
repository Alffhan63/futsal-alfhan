<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>

<head>
  <title>
    <?php echo $title; ?>
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>    
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <!-- Datetimepicker -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap-datetimepicker.min.css')?>">


  <style type="text/css" media="screen">
    /*Font with internet*/
    @import url('https://fonts.googleapis.com/css?family=Pacifico');

    #form {
      margin: auto;
      width: 100%;
    }
  </style>

</head>

<body>
<div class="container">
<div class="row"  style="margin-top:10vh">
   <div class=" col-md-4 col-md-offset-4  jumbotron" >
      <h2 class="text-center">Register Form</h2>
      <hr>
      <?php 
         if (validation_errors()) {
            echo '
            <div class="alert alert-warning">'.
             validation_errors().
            '</div>';
         }
       ?>
      <form action="<?php echo site_url('UserAuth/register')?>" method="post">
         <div class="form-group has-feedback">
            <label for="usr">Nama :</label>
            <input name="nama" class="form-control" placeholder="Masukan Nama">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
         </div>
         <div class="form-group has-feedback">
            <label for="usr">Username :</label>
            <input name="username" class="form-control" placeholder="Masukan Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
         </div>
         <div class="form-group has-feedback">
            <label for="pwd">Password :</label>
            <input name="password" type="password" class="form-control" placeholder="Masukan Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         </div>
         <div class="form-group has-feedback">
            <label for="pwd">Re-Password :</label>
            <input name="repassword" type="password" class="form-control" placeholder="Masukan Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         </div>         
         <div class="form-group has-feedback">
            <label for="nmeteam">Nama Team :</label>
            <input name="nama_tim" class="form-control" placeholder="Masukan Nama team">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         </div>
         <div class="form-group has-feedback">
            <label for="alamat">Alamat :</label>
            <input name="alamat" class="form-control" placeholder="Masukan Nama">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         </div>
         <div class="form-group has-feedback">
            <label for="nohp">Nomor Hp :</label>
            <input name="no_hp" class="form-control" placeholder="Masukan Nomor Hp">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         </div>
         <button type="submit" class="btn btn-primary btn-block">Daftar</button>
         <a  href="<?php echo site_url('UserAuth/login')?>" class="btn btn-danger btn-block">Batal</a>
      </form>
   </div>
</div>
</div>

<!-- jquery must be first -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js" />
  </script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js" />
  </script>

</body>