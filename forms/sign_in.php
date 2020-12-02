<!doctype html>
<html lang="en">

<?php
include "../include/header.php";
 ?>

   <form action="../back/connexion_backend.php" method="post">
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
        <a href="/Auto-eval/forms/unknown.php">Mot de passe oublié ?</a>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-12">
        <p>Pas encore inscrit ? <a href="/Auto-eval/forms/sign_up.php">S'inscrire</a></p>
    </div>
</div>

   </form>

   <?php
   include "../include/footer.php";
   ?>

</body>
</html>
