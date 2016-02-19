<!DOCTYPE html>
<html lang="en">
<head>
<title>Blast | Schnitzel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/b4/css/bootstrap.min.css">
    <script  src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="assets/b4/js/bootstrap.min.js"></script>
    <style>
    @font-face {
        font-family:piece;
        src: url(PiecesofEight.ttf);
    }

    h1{
        font-family:'piece';
        color:#e2e2e2;
        white-space:nowrap;

      }
    @media(min-width:1px) {
        h1{
            font-family:'piece';
            color:#e2e2e2;
            white-space:nowrap;
            font-size:25px;
          }
    }
    h2{
     font-size:50px;
    }
    body{
      background: url("assets/b4/t.jpg") no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    </style>
</head>

<body >
<br>
<div class= "container">
    <br><br>
    <center>
    <img src="assets/b4/Schnitzel1.png" class="img-fluid" alt="Generic responsive image" />
    </center>
</div>
<br>
<div class="container">
    <div class="row" id="clockdiv">
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
            <center>
            <br>
            <h2 style="color:white"> <span class="days"></span></h2>
            <h4>Days</h4>
            <br>
            </center>
        </div>
        <div class="col-sm-2">
            <center>
            <br>
            <h2 style="color:white"> <span class="hours"></span></h2>
            <h4>Hours</h4>
            <br>
            </center>
        </div>

        <div class="col-sm-2">
            <center>
            <br>
            <h2 style="color:white"> <span class="minutes"></span></h2>
            <h4>Minutes</h4>
            <br>
            </center>
        </div>

        <div class="col-sm-2">
            <center>
            <br>
            <h2 style="color:white"> <span class="seconds"></span></h2>
            <h4>Seconds</h4>
            <br>
            </center>
        </div>
        <div class="col-sm-2"></div>
    </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="fb-page center-block" style="float:none"
      data-href="https://www.facebook.com/blast2k16"
      data-width="380"
      data-hide-cover="false"
      data-show-facepile="false"
      data-show-posts="false"></div>
    </div>
  </div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1514492578857430";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
  };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
            window.location.reload()
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date('<?= $releasing_date ?>');
initializeClock('clockdiv', deadline);
</script>
<?php include_once(APPPATH."views/templates/analyticstracking.php") ?>
</body>
</html>

