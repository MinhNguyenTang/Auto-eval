<!Doctype html>

<?php
include 'include/header.php';
 ?>

<html>
<body>

  <form action="../back/inscription_backend.php" method="post">
    <div class="form-group row">
      <div class="">
        <input type="text" class="form-control" name="nom" placeholder="Nom"  maxlength="80" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="text" class="form-control" name="prenom" placeholder="Prénom" maxlength="80" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="email" class="form-control" name="mail" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" maxlength="80" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="">
      <input type="submit" class="form-control" value="Valider">
    </div>
  </div>
  </form>

</body>
</html>
