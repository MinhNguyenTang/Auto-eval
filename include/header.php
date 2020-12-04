<?php
session_start();
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

<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

<link rel="stylesheet" href="/Auto-eval/css/animate.css">
<link rel="stylesheet" href="/Auto-eval/css/icomoon.css">
<link rel="stylesheet" href="/Auto-eval/css/bootstrap.css">
<link rel="stylesheet" href="/Auto-eval/css/magnific-popup.css">
<link rel="stylesheet" href="/Auto-eval/css/owl.carousel.min.css">
<link rel="stylesheet" href="/Auto-eval/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/Auto-eval/css/style.css">
<script src="/Auto-eval/js/modernizr-2.6.2.min.js"></script>

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
          <?php }
          if(isset($_SESSION['user'])) { ?>
            <li class="active"><a href="/Auto-eval/index.php">Home</a></li>
            <li><a href="/Auto-eval/forms/contact.php">Contact</a></li>
            <?php if(unserialize($_SESSION['user'])->getRole_user()=="admin") { ?>
              <li><a href="/Auto-eval/web/admin.php">Espace admin</a></li>
            <?php }
            elseif(unserialize($_SESSION['user'])->getRole_user()=="formateur") { ?>
              <li><a href="/Auto-eval/web/formateurs.php">Espace formateur</a></li>
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
