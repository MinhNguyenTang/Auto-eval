<!doctype html>
<html>

<?php
include "../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/Hopital/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Hopital/back/entity/spe.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Hopital/back/entity/user.php');
 ?>

<body>

  <div class="container">
    <div class=" form-group">
      <div class="title">
        <h3>Mes informations personnelles</h3>
      </div>
    </div>
    <?php
    $manager = new manager();
    $user = $manager->recovery_data(unserialize($_SESSION['user'])->getId());
    $user = unserialize($_SESSION['user']);
    ?>
    <form action="" method="post">
      <div class="form-group row">
        <input type="hidden" value="<?php echo $user->getId();?>">
      </div>

      <div class="form-group row">
        <label for="">Nom</label><br>
        <input type="text" class="form-control" name="nom" value="<?php echo $user->getNom();?>" required>
      </div>

      <div class="form-group row">
        <label for="">Prénom</label><br>
        <input type="text" class="form-control" name="prenom" value="<?php echo $user->getPrenom();?>" required>
      </div>

      <div class="form-group row">
        <label for="">Adresse e-mail</label><br>
        <input type="email" class="form-control" name="mail" value="<?php echo $user->getMail();?>" required>
      </div>

      <div class="form-group row">
        <label for="">Mot de passe</label><br>
        <input type="password" class="form-control" name="mdp" value="<?php echo $user->getMdp();?>" required>
      </div>

      <div class="form-group row">
        <input type="submit" class="btn btn-primary" value="Valider">
      </div>
    </form>

     <?php
     include "../include/footer.php";
      ?>

</body>
</html>
