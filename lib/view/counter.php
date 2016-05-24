<!DOCTYPE html>
<html>

  <?php require_once('lib/view/head.html') ?>

  <body>
    <?php require_once('lib/view/header.html') ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="main">
            <div class="content">
              <div class="text">
                <h2><?php set_locales(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)); echo $not_yet_open; ?></h2>
              </div> <!-- /.Text Div -->
              <div class="counter">
                <h3><?php echo $opening_in ?></h3>
                <div id="countdown">

                </div><!-- /#Countdown Div -->
              </div> <!-- /.Counter Div -->
            </div> <!-- /.Content Div -->
          </div> <!-- /#Main Div -->
        </div> <!-- /.Columns Div -->
      </div> <!-- /.Row Div -->
    </div> <!-- /.Container Div -->
  </body>
    <script>
      // set the date we're counting down to
      var target_date = <?php echo strtotime($opendate) * 1000 ?>;

      // variables for time units
      var days, hours, minutes, seconds;

      // get tag element
      var countdown = document.getElementById('countdown');

      // update the tag with id "countdown" every 1 second
      setInterval(function() {

        // find the amount of "seconds" between now and target
        var current_date = new Date().getTime();
        var seconds_left = (target_date - current_date) / 1000;

        // do some time calculations
        days = parseInt(seconds_left / 86400);
        seconds_left = seconds_left % 86400;

        hours = parseInt(seconds_left / 3600);
        seconds_left = seconds_left % 3600;

        minutes = parseInt(seconds_left / 60);
        seconds = parseInt(seconds_left % 60);

        // format countdown string + set tag value
        countdown.innerHTML = '<span class="days">' + days + ' <b>Days</b></span> <span class="hours">' + hours + ' <b>Hours</b></span> <span class="minutes">' +
          minutes + ' <b>Minutes</b></span> <span class="seconds">' + seconds + ' <b>Seconds</b></span>';

      }, 1000);
    </script>
</html>
