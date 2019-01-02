<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
  <div class="clearfix" style="margin-top:30px;">
    <span class="float-left">
      <h3 class="text-muted">List Jadwal Pemesanan</h3>
    </span>
    <span class="float-right">
    <a href="<?php echo site_url('UserHome/viewBooking/'.$no_lap)?>" class="btn btn-primary">Booking</a>
  </span>
  </div>
  <div class="form-group">
    <div class='input-group date' id='datepicker'>
      <input type='text' class="form-control" name="tanggal" />
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
      </span>
    </div>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Jam Mulai</th>
        <th>Status</th>
        <th>Nama Tim</th>
      </tr>
    </thead>
    <tbody>
    <?php $nomor = 1; ?>
      <?php foreach ($data as $book) { ?>

      <tr>
        <td>
          <?php echo $nomor; ?>
        </td>
        <!-- <td>
          <?php echo $book->tanggal_booking; ?>
        </td>  -->
        <td>
          <?php echo $book->jam_main; ?>
        </td>
        <!-- <td>
          <?php echo $book->nama_tim; ?>
        </td> -->
        <td>
          <?php foreach($Booking as $BookingLap){ ?>
          <!-- <?php echo $hasil= $book->id_jadwal; ?>
          <?php echo '<script>console.log('.json_encode($hasil).')</script>'; ?> -->
          <?php if ($BookingLap->id_jadwal == $book->id_jadwal): ?>
            <?php if ($BookingLap->status_booking == 0): ?>
            <p  style="color:#FF0000">Booking</p>
          <?php elseif ($BookingLap->status_booking == 1): ?>
            <p style="color:#008000">Booked</p>
            <?php else: ?>
              <p>Free</p>
            <?php endif; ?>
          <?php endif; ?>
          <?php }?>
        </td>
        <td>
          <?php foreach($Booking as $BookingLap){ ?>
          <!-- <?php echo $hasil= $book->id_jadwal; ?>
          <?php echo '<script>console.log('.json_encode($hasil).')</script>'; ?> -->
          <?php if ($BookingLap->id_jadwal == $book->id_jadwal):?>
            <?php if ($BookingLap->status_booking == 0): ?>
              <?php echo $BookingLap->nama_tim ?>
          <?php elseif ($BookingLap->status_booking == 1): ?>
            <?php echo $BookingLap->nama_tim ?>
            <?php else: ?>
              <p>Free</p>
            <?php endif; ?>
          <?php endif; ?>
          <?php }?>
        </td>
      </tr>
      <?php $nomor = $nomor + 1; ?>
      <?php }?>

    </tbody>
  </table>
</div>

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
</script>

<script type="text/javascript">
  $(function () {
    $('#datepicker').datetimepicker({
      // locale: moment(),
      // format: 'l',
      format: "YYYY-MM-DD" ,
      defaultDate: moment(),
      maxDate: moment().add(14, 'days'),
      minDate: moment().subtract(1, 'days')
    });
  });
</script>
