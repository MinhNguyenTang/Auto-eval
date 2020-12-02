<!Doctype html>

<?php
include '../include/header.php';
 ?>

<html>
<body>

<div class="hero" style="background-image: url('/Auto-eval/images/img_bg_1.jpg');">
  <div class="container" style="padding-top: 150px">
    <form action="../back/unknown.php" method="post">
      <div class="form-group">
        <div class="title">
          <h3>Réinitilisation du mot de passe</h3>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <input type="email" id="email" class="form-control" placeholder="Adresse mail" required>
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
