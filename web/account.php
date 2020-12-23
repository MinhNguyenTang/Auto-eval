<!doctype html>
<html>

<?php
include "../include/header.php";
 ?>

<body>

<div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
  <div class="container" style="padding-top: 150px">
    <div style="background-color: rgba(208, 211, 212); width: 700px;padding: 10px;border-radius: 10px">
      <?php
      $manager = new manager();
      $user = $manager->recuperation_data(unserialize($_SESSION['user'])->getId());
      $user = unserialize($_SESSION['user']);
      ?>
      <form action="../back/modification_back.php" method="post">
        <div class="form-group row">
          <div class="container">
            <div class=" form-group">
              <div class="title">
                <h3>Mes informations personnelles</h3>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="hidden" name="id" value="<?php echo $user->getId();?>">
            </div>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label for="">Nom</label>
            <input type="text" class="form-control" name="nom" value="<?php echo $user->getNom();?>" minlength="4" maxlength="255" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom" value="<?php echo $user->getPrenom();?>" minlength="4" maxlength="255" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label for="">Adresse e-mail</label>
            <input type="email" class="form-control" name="mail" value="<?php echo $user->getMail();?>" minlength="4" maxlength="255" required>
        </div>
      </div>

        <div class="form-group row">
          <div class="col-md-12">
            <input type="submit" class="btn btn-primary" value="Valider">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <strong><a href="/Auto-eval/forms/nouveau_mdp.php">Changer de mot de passe ?</a></strong>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

     <?php
     include "../include/footer.php";
      ?>

</body>
</html>
