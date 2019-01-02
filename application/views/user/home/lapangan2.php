<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container">
  <div class="clearfix" style="margin-top:30px;">
    <span class="float-left">
      <h3 class="text-muted">List Jadwal Pemesanan</h3>
    </span>
    <span class="float-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        method="post" action="<?php echo site_url('pasundan/bookings'); ?>button">Booking</button> </span>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Lapangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url('user/bookings'); ?>" method="post">
            <input type="text" class="form-control" name="id_lapangan" value="2" id="exampleInputEmail1" hidden>
            <input type="text" class="form-control" name="id_status" value="1" id="exampleInputEmail1" hidden>
            <input type="text" class="form-control" name="tlp" value="<?php echo $this->session->userdata('no_hp'); ?>"
              id="exampleInputEmail1" hidden>
            <input type="text" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>"
              id="exampleInputEmail1" hidden>
            <div class="form-group">
              <strong><label for="exampleInputPassword1">Tgl Main</label></strong>
              <input type="date" class="form-control" name="tgl_main" id="exampleInputPassword1" placeholder="Tanggal Main"
                required>
            </div>
            <div class="form-group">
              <strong><label for="exampleInputEmail1">Jam Mulai</label></strong>
              <input type="time" class="form-control" name="jam_mulai" id="exampleInputEmail1" placeholder="Jam Mulai"
                required>
            </div>
            <div class="form-group">
              <strong><label for="exampleInputPassword1">Jam Selesai</label></strong>
              <input type="time" class="form-control" name="jam_selesai" id="exampleInputPassword1" placeholder="Jam Selesai"
                required>
            </div>


            <input type="text" class="form-control" name="nama_pemesan" value="<?php echo $this->session->userdata('nama'); ?>"
              id="exampleInputPassword1" placeholder="Jam Pemesanan" hidden>

            <input type="text" class="form-control" name="alamat" value="<?php echo $this->session->userdata('alamat'); ?>"
              id="exampleInputPassword1" placeholder="Jam Pemesanan" hidden>
            <input type="text" class="form-control" name="nama_tim" value="<?php echo $this->session->userdata('nama_tim'); ?>"
              id="exampleInputPassword1" placeholder="Nama Tim" hidden>

            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Id Pemesanan</th>
        <th>Tanggal Main</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>Nama Pemesan</th>
        <th>Nama Tim</th>
        <th>status</th>
      </tr>

    </thead>

  </table>
</div>

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
</script>