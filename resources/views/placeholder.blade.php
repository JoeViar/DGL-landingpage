<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGL Latam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- favicon -->

<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">

<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">

<link rel="manifest" href="assets/img/favicon/site.webmanifest">

<!-- Stlylesheet -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="assets/js/src/jquery.progressBarTimer.js" type="text/javascript" charset="utf-8"></script>


<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />


<link rel="stylesheet" href="css/style.css" type="text/css" />


<!-- Skin Color -->

</head>
<body>
<!-- js -->

<!-- Start Preloader -->

<!-- End Preloader -->

</head>
<body >
<div class="container">
    <div class="d-flex text-center">
        <div id="wait">
            <img src="img/assets/logo-big.png" alt="">
        </div>
        <div id="wait-mobile">
            <img src="img/assets/logo-mobile.png" alt="" id="image_sender">
        </div>
        <h1> Prepárate, pronto conocerás más de nosotros</h1>
        <div class="row mt-3" id="progress_bar">
            <div class="col-md-12">
              <!-- <code>$('...').progressBarTimer({ autoStart: true, animated: true });</code> -->
              <div id="example4" ></div>
          </div>
        </div>

    </div>
    <div class="loading-box">
    <div class="loader"></div>
</div>


</div>
        
    
<script>
          $('#example1').progressBarTimer({ autoStart: true });
          $('#example2').progressBarTimer({ autoStart: true, baseStyle: 'bg-info', warningStyle: 'bg-info', completeStyle: 'bg-success' });
          $('#example3').progressBarTimer({ autoStart: true, striped: true });
          $('#example4').progressBarTimer({ autoStart: true, animated: true, smooth: true,height: 30,  });
          $('#example5').progressBarTimer({ autoStart: true, height: 30, });
          $('#example6').progressBarTimer({ autoStart: true, smooth: true });
          $('#example7').progressBarTimer({ autoStart: true, timeLimit: 30, warningThreshold: 10 });
          $('#example8').progressBarTimer({ autoStart: true, smooth: true, label: { show: true, type: 'percent' }});
          $('#example9').progressBarTimer({ autoStart: true, smooth: true, label: { show: true, type: 'seconds' }});
          $('#example10').progressBarTimer({ autoStart: true, onFinish: function() { alert('That\'s all folks'); }});
          $('#example11').progressBarTimer();
          $('#startBtn').click(function() {
              $('#example11').progressBarTimer().start();
              $('#stopBtn').prop("disabled", false);
              $('#getElapsedTimeBtn').prop("disabled", false);
              $('#getRemainingTimeBtn').prop("disabled", false);
              $('#addSecondsBtn').prop("disabled", false);
              $('#startBtn').prop("disabled", true);
          });
          $('#stopBtn').click(function() {
              $('#example11').progressBarTimer().stop();
              $('#stopBtn').prop("disabled", true);
              $('#getElapsedTimeBtn').prop("disabled", false);
              $('#getRemainingTimeBtn').prop("disabled", false);
              $('#addSecondsBtn').prop("disabled", false);
              $('#startBtn').prop("disabled", false);
          });
          $('#resetBtn').click(function() {
            $('#example11').progressBarTimer().start();
            $('#stopBtn').prop("disabled", false);
            $('#example11').progressBarTimer().reset();
          });
          $('#getElapsedTimeBtn').click(function() {
            alert('Elapsed Time: ' + $('#example11').progressBarTimer().getElapsedTime() + ' secs');
          });
          $('#getRemainingTimeBtn').click(function() {
            alert('Remaining Time: ' + $('#example11').progressBarTimer().getRemainingTime() + ' secs');
          });          
        </script>
</body>
</html>