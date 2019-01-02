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

    /*login*/
    #formLogin {
      margin: auto;
      margin-top: 100px;
      width: 50%;
      box-shadow: 0 0 10px black;
    }
  </style>

</head>

<body>

  <div id="formLogin" class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <!-- form card login -->
          <div id="form" class="card rounded-0 well well-lg">     
            <div class="card-body">
            <h2 class="text-center mb-4">Login Form</h2>
              <form action="<?php echo site_url('UserAuth/login')?>" method="post">
                <div class="form-group">
                  <?php if(validation_errors()){?>
                  <div class="alert alert-warning">
                    <?= validation_errors();?>
                  </div>
                  <?php }
                elseif($this->session->flashdata('failLogin')){
                                          echo '<div class="alert alert-danger">'.$this->session->flashdata('failLogin').'</div>';
                                    } ?>
                  <label for="usr">Username</label>
                  <input type="text" class="form-control form-control-lg rounded-0" name="username" required="">
                </div>
                <div class="form-group">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control form-control-lg rounded-0" name="password" required="">
                </div>
                <button type="submit" class="btn btn-success btn-block">Login</button>
                <a href="<?php echo site_url('UserAuth/register')?>" class="btn btn-warning btn-block">Daftar</a>
              </form>
            </div>
            <!--/card-block-->
          </div>
          <!-- /form card login -->
        </div>
      </div>
    </div>
  </div>

  <!-- jquery must be first -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js" />
  </script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js" />
  </script>

</body>