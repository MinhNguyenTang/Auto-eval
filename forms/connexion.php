<!doctype html>
<html lang="en">

<?php
include "../include/header.php";
 ?>

<div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
  <div class="container" style="padding-top: 150px">
    <div style="background-color: rgba(208, 211, 212); width: 700px;padding: 10px;border-radius: 10px">
      <form action="../back/connexion_back.php" method="post">
        <div class="form-group">
          <div class="title">
            <h3>Connexion</h3>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label for="">Adresse e-mail</label>
              <input type="email" class="form-control" name="mail" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label for="">Mot de passe</label>
              <input type="password" class="form-control" name="mdp" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
           <a href="/Auto-eval/forms/mot_de_passe_oublie.php">Mot de passe oublié ?</a>
         </div>
       </div>

       <div class="form-group row">
         <div class="col-md-12">
           <p><strong>Pas encore inscrit ? </strong><a href="/Auto-eval/forms/inscription.php">S'inscrire</a></p>
         </div>
       </div>

        <div class="form-group">
          <input type="submit" value="Valider" class="btn btn-primary">
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
