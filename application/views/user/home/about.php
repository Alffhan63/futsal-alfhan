<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form role="form" action="<?php echo site_url('UserHome/aboutAct')?>" method="post">
<div id="contLogin" class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <!-- form card login -->
        
        <div id="form" class="card rounded-0 well well-lg">
          <h2 class="text-center text-white mb-4">Authentikasi</h2>
          <a href="<?php echo site_url('UserHome/logout')?>" class="btn btn-warning btn-block">Logout</a>
          <label for="date">Date:</label>
          <!-- <input type="text" name="datetimes" /> -->
          <div class="form-group">
            <div class='input-group date' id='datepicker'>
              <input type='text' class="form-control" name="tanggal" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
          </div>
          <p id="demo"></p>
          <br>
          <button class="btn-primary">Subimt</button>
        </div>
       
        <!-- /form card login -->
      </div>
    </div>
  </div>
</div>
</form>

<!-- datepicker just 2 weeks -->
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

<!-- timer countdown -->
<script>
  // Set the date get from db
  var oldDate = new Date();
  var hour = oldDate.getHours();
  var countDownDate = oldDate.setHours(hour + 2);

  // Update the count down every 1 second
  var x = setInterval(function () {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + "h "
      + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
</script>