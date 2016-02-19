<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= base_url('assets/b4/css/bootstrap.min.css')?>">
<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/b4/js/bootstrap.min.js')?>"></script>
<style>


.text-center {
  text-align: center;
}
.navbar-brand {
  float: none;
}
.navbar-nav .nav-item {
  float: none;
}
.navbar-divider,
.navbar-nav .nav-item+.nav-item,
.navbar-nav .nav-link + .nav-link {
  margin-left: 0;
}
@media (min-width: 34em) {
  .navbar-brand {
    float: left;
  }
  .navbar-nav .nav-item {
    float: left;
  }
  .navbar-divider,
  .navbar-nav .nav-item+.nav-item,
  .navbar-nav .nav-link + .nav-link {
    margin-left: 1rem;
  }
}

	   .nowrap{
	    white-space:nowrap;
	   }

	@font-face {
    font-family:piece;
    src: url(<?= base_url('assets/b4/PiecesofEight.ttf') ?>);
    }

	@font-face {
     font-family:glyph;
    src: url(<?= base_url('assets/b4/m.ttf') ?> );
    }

	 h1{
	     font-family:'piece';
		 color:#e2e2e2;
		 white-space:nowrap;

	   }

	 @media(min-width:1px){
	 h1{
	     font-family:'piece';
		 color:#e2e2e2;
		 white-space:nowrap;
		 font-size:25px;
	   }
	}


	   @media(min-width:544px){
	 h1{
	     font-family:'piece';
		 color:#e2e2e2;
		 white-space:nowrap;
		 font-size:23px;
	   }
	}


	@media(min-width:768px){
	 h1{
	     font-family:'piece';
		 color:#e2e2e2;
		 white-space:nowrap;
		 font-size:25px;
	   }
	}

	@media(min-width:992px){
	 h1{
	     font-family:'piece';
		 color:#e2e2e2;
		 white-space:nowrap;
		 font-size:30px;
	   }

	   @media(min-width:1200px){
	 h1{
	     font-family:'piece';
		 color:#e2e2e2;
		 white-space:nowrap;
		 font-size:40px;
	   }
	}
 </style>
</head>

<body style="background-color:black">

<br>
  <div class= "container">
      <img src="<?= base_url('assets/b4/Schnitzel1.png') ?>" class="img-fluid" alt="Generic responsive image">
   </div>
<br>
<div class="container">
<div class="card-columns">

<a href="<?= base_url('leaderboard')?>">
<div class="card card-inverse"  style="background-color:#8d1517; border-color:#8d1517;">

<img class="card-img" img src="<?= base_url('assets/b4/cup.png')?>" alt="Card image" >

  <div class="card-img-overlay">

      <h1 class="card-title"  ><center>Leaderboards</center></h1>

  </div>
</div>
</a>


<a href="<?php echo $login_url ?>">
<div class="card card-inverse"  style="background-color:#030032; border-color: #030032;">

  <img class="card-img" img src="<?= base_url('assets/b4/play.png')?>" alt="Card image" >

  <div class="card-img-overlay">

      <h1 class="card-title"  ><center>Login with Facebook</center></h1>

  </div>
</div>
</a>


<a href="<?= base_url('rules')?>">
<div class="card card-inverse"  style="background-color:#8d1517; border-color:#8d1517;">

<img class="card-img" img src="<?= base_url('assets/b4/rules.png')?>" alt="Card image" >

  <div class="card-img-overlay">

      <h1 class="card-title"  ><center>Rules</center></h1>

  </div>
</div>
</a>

</div>
</div>

<div class="container text-center">
<div class="fb-page" style="float:none"
  data-href="https://www.facebook.com/blast2k16"
  data-width="380"
  data-hide-cover="false"
  data-show-facepile="true"
  data-show-posts="false"></div>
</div>
<br>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1514492578857430";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
<?php include_once("analyticstracking.php") ?>
</body>
</html>

