<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= base_url('assets/b4/css/bootstrap.min.css')?>">
<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/b4/js/tether.min.js')?>"></script>
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

<nav class="navbar navbar-dark" style="background-color:#000000">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    <span style="color:white">&#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <a class="navbar-brand" href="#" style="font-family:piece; color:#eb1114"><b >Schnitzel</b></a>
    <ul class="nav navbar-nav">
      <li class="nav-item <?= $acthome ?>">
        <a class="nav-link" href="<?= base_url() ?>"><span style="font-family:glyph"></span><b>Play </b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= $actleaderboard ?>">
        <a class="nav-link" href="<?= base_url('leaderboard')?>"><b>Leaderboard</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://facebook.com/blast2k16"><b>Clues</b></a>
      </li>
      <li class="nav-item <?= $actrules ?>">
        <a class="nav-link" href="<?= base_url('rules')?>"><b>Rules</b></a>
      </li>
    <?php
    $this->load->library('session');
    $user_id=$this->session->userdata('userid');
    if($user_id!=FALSE) : ?>
	  <li class="nav-item pull-sm-right">
        <a class="nav-link" href="<?= base_url('profile')?>"><span style="font-family:glyph"></span><b>Profile</b></a>
      </li>

	   <li class="nav-item pull-sm-right">
        <a class="nav-link" href="<?= base_url('index.php/logout')?>"><span style="font-family:glyph"></span><b> Logout</b></a>
      </li>
    <?php endif ?>
    </ul>
  </div>
</nav>
<br>
<br>
