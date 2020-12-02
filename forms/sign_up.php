<!Doctype html>

<?php
include '../include/header.php';
 ?>

<html>
<body>

    <form action="../back/inscription_backend.php" method="post">
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

    </form>

    <?php
    include "../include/footer.php";
    ?>

</body>
</html>
