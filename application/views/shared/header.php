<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css" media="screen">
  header {
    background-color: #333;
    height: 4rem;
  }

  nav a {
    font-weight: 700;
    color: rgba(255, 255, 255, .5);
    background-color: transparent;
    border-bottom: .25rem solid transparent;
  }

  div a:hover {
    color: #fff;
    text-decoration: none;
  }

  nav a:hover {
    color: #fff;
  }
</style>

  <div class="inner clearfix">
    <h3 class="masthead-brand float-left" style="color:#fff; padding-top:10px;padding-left:10px;">MFC Futsal</h3>
    <nav class="nav nav-masthead justify-content-center float-right p-3">
      <a class="nav-link active" href="<?php echo site_url('UserHome/index') ?>">Home</a>
      <a class="nav-link" href="<?php echo site_url('UserHome/logout') ?>">Logout</a>
      <a class="nav-link" href="<?php echo site_url('UserHome/pembayaran') ?>">Pembayaran</a>
      <a class="nav-link" href="<?php echo site_url('UserHome/sop') ?>">SOP</a>
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">MyProfil</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo site_url('UserHome/profil') ?>">MyProfil</a>
        <a class="dropdown-item" href="<?php echo site_url('UserAuth/login') ?>">Login</a>
        <a class="dropdown-item" href="<?php echo site_url('UserHome/logout') ?>">Logout</a>
      </div>
    </nav>
  </div>
