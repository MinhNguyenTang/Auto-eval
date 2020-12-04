<!doctype html>
<html>

<?php
include "../include/header.php";
 ?>

 <body>

   <div class= "hero"style="background-image: url('/Auto-eval/images/login-background.jpg');">
     <div class="container" style="padding-top: 150px">
       <form action="../back/inscription_back.php" method="post">
         <div class="form-group">
           <div class="title">
             <h3>Ajouter un formateur</h3>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-6">
             <input type="text" class="form-control" name="nom" placeholder="Nom" minlength="4" maxlength="12" required>
           </div>
           <div class="col-md-6">
             <input type="text" class="form-control" name="prenom" placeholder="Prénom" minlength="4" maxlength="12" required>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-12">
             <input type="email" class="form-control" name="mail" placeholder="Adresse mail" required>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-6">
             <select name="nom_spe" class="form-control" required>
               <?php
               $manager = new manager();
               $specialite = $manager->get_specialite(); 
               foreach($specialite as $key=>$value) { ?>
               <option value="<?php echo $value['id'] ?>"><?php echo $value['nom_spe']?></option>
             <?php } ?>
             </select>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-12">
             <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" minlength="4" maxlength="255" required>
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
