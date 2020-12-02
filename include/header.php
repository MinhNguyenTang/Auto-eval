<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');
?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Learn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
<meta name="author" content="freehtml5.co" />
  <!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="/Auto-eval/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="/Auto-eval/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="/Auto-eval/css/bootstrap.css">

<!-- Magnific Popup -->
<link rel="stylesheet" href="/Auto-eval/css/magnific-popup.css">

<!-- Owl Carousel  -->
<link rel="stylesheet" href="/Auto-eval/css/owl.carousel.min.css">
<link rel="stylesheet" href="/Auto-eval/css/owl.theme.default.min.css">

<!-- Theme style  -->
<link rel="stylesheet" href="/Auto-eval/css/style.css">

<!-- Modernizr JS -->
<script src="/Auto-eval/js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
<nav class="fh5co-nav" role="navigation">
  <div class="top-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-1">
          <div id="fh5co-logo"><a href="/Auto-eval/index.php" class="nav-link">Learn<span>.</span></a></div>
        </div>
        <div class="col-xs-11 text-right menu-1">
          <ul>
            <?php
            if(empty($_SESSION['user'])) { ?>
            <li class="active"><a href="/Auto-eval/index.php">Accueil</a></li>
            <li class="btn-cta"><a href="/Auto-eval/forms/sign_in.php"><span>Connexion</span></a></li>
            <li class="btn-cta"><a href="/Auto-eval/forms/sign_up.php"><span>Inscription</span></a></li>
          <?php }
          if(isset($_SESSION['user'])) { ?>
            <li class="active"><a href="/Auto-eval/index.php">Home</a></li>
            <li><a href="/Auto-eval/forms/contact.php">Contact</a></li>
            <?php if(unserialize($_SESSION['user'])->getRole_user()=="admin") { ?>
              <li><a href="/Auto-eval/web/admin.php">Admin</a></li>
            <?php }
            elseif(unserialize($_SESSION['user'])->getRole_user()=="formateur") { ?>
              <li><a href="/Auto-eval/web/formateurs.php">Mes cours</a></li>
            <?php } ?>
            <li><a href="/Auto-eval/web/account.php">Mon compte</a></li>
            <li><a href="/Auto-eval/back/deconnexion_backend.php">Déconnexion</a></li>
          <?php } ?>
          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="display-t">
          <div class="display-tc animate-box" data-animate-effect="fadeIn">
            <h1>The Art of Teaching is the Art of Assisting Discovery</h1>
            <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
            <p>
              <a class="btn btn-primary btn-lg btn-learn" href="/Auto-eval/forms/sign_in.php">Se connecter</a>
              <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
