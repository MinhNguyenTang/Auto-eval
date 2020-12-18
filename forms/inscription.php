<!doctype html>
<html lang="en">

<?php
include '../include/header.php';
 ?>

<body>

<div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
  <div class="container" style="padding-top: 150px">
    <div style="background-color: rgba(208, 211, 212); width: 700px;padding: 10px;border-radius: 10px">
    <form action="../back/inscription_back.php" method="post">
      <div class="form-group">
        <div class="title">
          <h3>Inscription</h3>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label for="">Nom</label>
          <input type="text" class="form-control" name="nom" minlength="4" maxlength="255" required>
        </div>
        <div class="col-md-6">
          <label for="">Prénom</label>
          <input type="text" class="form-control" name="prenom" minlength="4" maxlength="255" required>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <label for="">Adresse e-mail</label>
          <input type="email" class="form-control" name="mail" minlength="4" maxlength="255" required>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <label for="">Mot de passe</label>
          <input type="password" class="form-control" name="mdp" minlength="4" maxlength="255" required>
        </div>
      </div>

      <div class="form-group row">
          <div class="col-md-12">
              <p><strong>Déjà inscrit ? </strong><a href="/Auto-eval/forms/connexion.php">Se connecter</a></p>
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
