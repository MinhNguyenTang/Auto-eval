<!doctype html>
 <html lang="en">

<?php
include "../include/header.php";
$manager = new manager();
$data = $manager->recovery_data(unserialize($_SESSION['user'])->getId());
$data = unserialize($_SESSION['user']);
 ?>

 <body>

   <div class="hero" style="background-image: url('/Auto-eval/images/login-background.jpg');">
     <div class="container" style="padding-top: 150px">
       <form action="../back/modification_back.php" method="post">
         <div class="row form-group">
           <input type="hidden" value="<?php echo $_POST['id'];?>" name="id">
           <div class="col-md-6">
             <input type="text" class="form-control" name="nom" value="<?php echo $data->getNom()?>" minlength="4" maxlength="30" required>
           </div>
           <div class="col-md-6">
             <input type="text" class="form-control" name="prenom" value="<?php echo $data->getPrenom()?>" minlength="4" maxlength="30" required>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-12">
             <input type="email" class="form-control" name="mail" value="<?php echo $data->getMail()?>" required>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-12">
             <input type="password" class="form-control" name="mdp" value="<?php echo $data->getMdp()?>" required>
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
