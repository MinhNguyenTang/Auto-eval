<!doctype html>
<html lang="en">

<?php
include "include/header.php";
 ?>

 <div class="col-md-6 animate-box">
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
       <input type="submit" value="Send Message" class="btn btn-primary">
     </div>

   </form>
 </div>

</body>
</html>
