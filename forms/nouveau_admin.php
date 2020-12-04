<!doctype html>
<html>

<?php
include "../include/header.php";
 ?>
<body>

  <div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
    <div class="container" style="padding-top: 150px">
      <form action="../back/ajout_admin.php" method="post">
        <div class="row form-group">
          <div class="col-md-6">
            <input type="text" class="form-control" name="nom" placeholder="Nom" minlength="4" maxlength="12" required>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="prenom" placeholder="Prénom" minlength="4" maxlength="12" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="email" class="form-control" name="mail" placeholder="Adresse mail" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" minlength="4" maxlength="255" required>
          </div>
        </div>

        <div class="form-group">
          <input type="submit" value="Valider" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>

  <?php
  include "../include/footer.php";
   ?>
   
</body>
</html>
