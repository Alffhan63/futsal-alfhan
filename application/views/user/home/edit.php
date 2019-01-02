<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<br>
<div class="container">
  <h1>Edit Profile</h1>
  <hr>
  <div class="row">
    <!-- left column -->

    <!-- edit form column -->
    <div class="col-md-20 personal-info" style="padding-left:300px">

      <form class="form-horizontal" role="form">
        <div class="form-group">
          <span class="float-left" style="padding-left:15px">
            <labFel class="col-lg-2 control-label">Nama:</label>
          </span>
          <div class="col-lg-8" style="padding-top:2px;padding-left:50px;">
            <input class="form-control" type="text" value="Nama">
          </div>
        </div>
        <div class="form-group">
          <span class="float-left" style="padding-left:2px"><label class="col-lg-2 control-label">UserName:</label></span>
          <div class="col-lg-8" style="padding-top:2px;padding-left:50px;">
            <input class="form-control" type="text" value="User Name">
          </div>
        </div>
        <div class="form-group">
          <span class="float-left" style="padding-left:2px"><label class="col-lg-2 control-label">NamaTim:</label></span>
          <div class="col-lg-8" style="padding-top:2px;padding-left:50px;">
            <input class="form-control" type="text" value="Nama Tim">
          </div>
        </div>
        <div class="form-group">
          <span class="float-left" style="padding-left:15px"><label class="col-lg-3 control-label">Alamat</label></span>
          <div class="col-lg-8" style="padding-top:2px;padding-left:50px;">
            <input class="form-control" type="text" value="Alamat">
          </div>
        </div>
        <div class="form-group">
          <span class="float-left" style="padding-left:10px"><label class="col-lg-2 control-label">NoHp</label></span>
          <div class="col-lg-8" style="padding-top:2px;padding-left:50px;">
            <input class="form-control" type="text" value="No Hp">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-5" style="padding-top:2px;padding-left:300px;">
            <input type="<?php echo base_url() ?>button" class="btn btn-primary" value="Save Changes">
            <span></span>
            <input type="<?php echo base_url() ?>reset" class="btn btn-default" value="Cancel">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<hr>