<!doctype html>
<html lang="en">

<?php
include '../include/header.php';
 ?>

<body>

<div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
  <div class="container" style="padding-top: 150px">
    <form action="../back/mdp_back.php" method="post">
      <div class="form-group">
        <div class="title">
          <h3>Réinitilisation du mot de passe</h3>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <h5>
            Veuillez saisir votre adresse e-mail pour réinitialiser votre mot de passe.
          </h5>
          <input type="email" class="form-control" name="mail" placeholder="Adresse mail" required>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" value="Valider" class="btn btn-primary">
        <input type="reset" value="Annuler" class="btn btn-secondary" onclick="location.href='../forms/sign_in.php'"/>
      </div>
    </form>
  </div>
</div>

    <?php
    include "../include/footer.php";
    ?>

</body>
</html>
