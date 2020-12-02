<!Doctype html>

<?php
include '../include/header.php';
 ?>

<html>
<body>

<div class="hero" style="background-image: url('/Auto-eval/images/img_bg_1.jpg');">
  <div class="container" style="padding-top: 150px">
    <form action="../back/inscription_backend.php" method="post">
      <div class="form-group">
        <div class="title">
          <h3>Inscription</h3>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <input type="text" id="fname" class="form-control" placeholder="Nom" required>
        </div>
        <div class="col-md-6">
          <input type="text" id="lname" class="form-control" placeholder="Prénom" required>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <input type="email" id="email" class="form-control" placeholder="Adresse mail" required>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <input type="password" id="" class="form-control" placeholder="Mot de passe" required>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" value="Valider" class="btn btn-primary">
      </div>

      <div class="form-group row">
          <div class="col-md-12">
              <p><strong>Déjà inscrit ? </strong><a href="/Auto-eval/forms/sign_in.php">Se connecter</a></p>
          </div>
      </div>
    </form>
  </div>
</div>

    <?php
    include "../include/footer.php";
    ?>

</body>
</html>
