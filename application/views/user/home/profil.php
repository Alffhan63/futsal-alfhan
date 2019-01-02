<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<br>
<div class="clearfix" style="margin-top:5px;padding-top:2px;padding-left:550px;">
      <div class="card border-secondary" style="width: 16rem;padding-top:1px;">
        <img class="card-img-top" src="<?php echo base_url() ?>img/user2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">MYPROFIL</h5>
          <p class="card-text"></p>
          <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
          <table class="table  table-condensed">
            <tr>
              <th width="20%">Nama</th>
              <td><?php echo $this->session->userdata('username'); ?></td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td><?php echo $this->session->userdata('alamat'); ?></td>
            </tr>
            <tr>
              <th>NoTelp</th>
              <td><?php echo $this->session->userdata('no_hp'); ?></td>
            </tr>

          </table>
          <span class="float-right"><a href="<?php echo site_url('UserHome/edit') ?>">EDIT</a></span>
        </div>
      </div>
      </div
