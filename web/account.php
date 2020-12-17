<!doctype html>
<html>

<?php
include "../include/header.php";
 ?>

<body>

<div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
  <div class="container" style="padding-top: 150px">
    <div class="container">
      <div class=" form-group">
        <div class="title">
          <h3>Mes informations personnelles</h3>
        </div>
      </div>
    </div>
      <?php
      $manager = new manager();
      $user = $manager->recuperation_data(unserialize($_SESSION['user'])->getId());
      $user = unserialize($_SESSION['user']);
      ?>
      <form action="../back/modification_back.php" method="post">
        <div class="form-group row">
          <div class="col-md-6">
            <input type="hidden" name="id" value="<?php echo $user->getId();?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="">Nom</label><br>
          <div class="col-md-6">
            <input type="text" class="form-control" name="nom" value="<?php echo $user->getNom();?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="">Prénom</label><br>
          <div class="col-md-6">
            <input type="text" class="form-control" name="prenom" value="<?php echo $user->getPrenom();?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="">Adresse e-mail</label><br>
          <div class="col-md-6">
            <input type="email" class="form-control" name="mail" value="<?php echo $user->getMail();?>" required>
        </div>
      </div>

        <div class="form-group row">
          <label for="">Mot de passe</label><br>
          <div class="col-md-6">
            <input type="password" class="form-control" name="mdp" value="<?php echo $user->getMdp();?>" required>
          </div>
        </div>

        <div class="form-group row">
          <input type="submit" class="btn btn-primary" value="Valider">
        </div>
      </form>
    </div>
  </div>

     <?php
     include "../include/footer.php";
      ?>

</body>
</html>
