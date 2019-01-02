<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<br>
<div class="container">
  <div class="content">
    <span class="float-left">
      <h3 class="text-muted">Detail Pemesanan</h3>
    </span>
    <span class="float-right"><button type="<?php echo base_url() ?>button" class="btn btn-primary" data-toggle="modal"
        data-target="#exampleModal"><span class="glyphicon glyphicon-pencil"></span>
        Edit Form
      </button></span>
    <table class="table  table-condensed">
      <!-- <tr>
      					<th width="20%"></th>
      					<td><?php echo $this->session->userdata('id_pemesaan'); ?></td>
      				</tr> -->

      <tr>
        <th></th>
        <td></td>
      </tr>
      <tr>
        <th></th>
        <td></td>
      </tr>
      <tr>
        <th></th>
        <td></td>
      </tr>
      <tr>
        <th></th>
        <td></td>
      </tr>
      <tr>
        <th></th>
        <td></td>
      </tr>
    </table>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo site_url('UserHome/index'); ?>">
              <strong><label for="exampleInputEmail1">Tamggal Main</label></strong>
              <div class="form-group">
                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="" required>
              </div>
              <div class="form-group">
                <strong><label for="exampleInputPassword1">Jam Mulai</label></strong>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Hari" required>
              </div>
              <div class="form-group">
                <strong><label for="exampleInputPassword1">Jam Selesai</label></strong>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" required>
              </div>
              <div class="form-group">
                <strong><label for="exampleInputPassword1">Nama Pemesan</label></strong>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Pemesan" required>
              </div>
              <div class="form-group">
                <strong><label for="exampleInputPassword1">Nama Tim</label></strong>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Tim" required>
              </div>
              <button type="submit" name="<?php echo base_url() ?>submit" class="btn btn-primary btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="text-left">
    <div class="container">
      <p> *melakukan pembayaran biaya uang muka 30.000 rupiah </p>
    </div>
  </footer>
  <form action="<?php echo site_url('UserHome/index'); ?>">
    <div class="form-group">
      <strong><span class="float-left"><label for="exampleFormControlFile1">Upload</label></span></strong>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <span class="float-left"><button type="<?php echo base_url() ?>button" class="btn btn-success" <span class="glyphicon glyphicon-pencil"></span>
    Kirim
    </button></span>
</div>
</form>