<!doctype html>
<html lang="en">

<?php
include "../include/header.php";
 ?>

<div class="hero" style="background-image: url('/Auto-eval/images/img_bg_1.jpg');">
  <div class="container" style="padding-top: 150px">
    <form action="../back/connexion_backend.php" method="post">
      <div class="form-group">
        <div class="title">
          <h3>Connexion</h3>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <input type="text" id="email" class="form-control" placeholder="Adresse mail" required>
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
         <a href="/Auto-eval/forms/mot_de_passe_oublie.php">Mot de passe oublié ?</a>
     </div>
 </div>

 <div class="form-group row">
     <div class="col-md-12">
         <p><strong>Pas encore inscrit ? </strong><a href="/Auto-eval/forms/sign_up.php">S'inscrire</a></p>
     </div>
 </div>
    </form>
  </div>
</div>

<?php
include "../include/footer.php"
 ?>

</body>
</html>
