<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');
?>

<!doctype html>
<html>

<div class="container">
  <div class="row align-items-center position-relative">

    <div class="col-3">
      <div class="logo">
        <a href="/Auto-eval/index.php"><span class="text-primary">E2C Paris</span></a>
    </div>
  </div>

  <div class="col-9 text-right">
    <nav class="E2C nav-bar" role="navigation">
      <ul class="link">
       <?php if(empty($_SESSION['user'])) { ?>
        <li><a href="/Auto-eval/index.php" class="nav-link">Home</a></li>
        <li><a href="/Auto-eval/web/about.php" class="nav-link">A propos</a></li>
        <li><a href="/Auto-eval/index.php" class="nav-link">Connexion</a></li>
        <li><a href="/Auto-eval/forms/sign_up.php" class="nav-link">Inscription</a></li>
        <?php }
        if(isset($_SESSION['user'])) { ?>
          <li><a href="/Auto-eval/index.php" class="nav-link">Home</a></li>
          <li><a href="/Auto-eval/index.php" class="nav-link">A propos</a></li>
          <?php if(unserialize($_SESSION['user'])=="formateurs") { ?>
            <li><a href="/Auto-eval/web/formateurs.php" class="nav-link">Espace formateur</a></li>
          <?php }
          elseif(unserialize($_SESSION['user']=="admin")) { ?>
            <li><a href="/Auto-eval/web/admin.php" class="nav-link">Admin</a></li>
          <?php } ?>
          <li><a href="/Auto-eval/index.php" class="nav-link">Compte</a></li>
          <li><a href="/Auto-eval/back/deconnexion_backend.php" class="nav-link">Déconnexion</a></li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</div>
</div>


</header>

<!-- HEADER -->

</html>
