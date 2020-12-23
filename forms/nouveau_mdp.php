<!doctype html>
<html lang="en">

<?php
include "../include/header.php";
 ?>

<div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
  <div class="container" style="padding-top: 150px">
    <div style="background-color: rgba(208, 211, 212); width: 700px;padding: 10px;border-radius: 10px">
      <form action="../back/nouveau_mdp_back.php" method="post">
        <div class="form-group">
          <div class="title">
            <h3>Changer de mot de passe</h3>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label for="">Ancien mot de passe</label>
              <input type="password" class="form-control" name="mdp" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label for="">Nouveau mot de passe</label>
              <input type="password" class="form-control" name="mdp" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label for="">Confirmation du mot de passe</label>
              <input type="password" class="form-control" name="mdp" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" value="Modifier le mot de passe" class="btn btn-primary">
            <input type="reset" value="Annuler" class="btn btn-secondary" onclick="location.href='../web/account.php'">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <strong><a href="">Mot de passe oublié ?</a></strong>
          </div>
        </div>

     </form>
    </div>
 </div>
</div>

<?php
include "../include/footer.php"
 ?>

</body>
</html>
