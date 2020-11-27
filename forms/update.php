<?php
include "include/header.php";
$manager = new manager();
$data = $manager->recovery_data(unserialize($_SESSION['user'])->getId());
$data = unserialize($_SESSION['user']);
 ?>

 <html>
 <body>

     <form action="../back/modification_backend.php" method="post">
       <div class="row form-group">
         <input type="hidden" value="<?php echo $_POST['id'];?>" name="id">
         <div class="col-md-6">
           <input type="text" id="fname" class="form-control" value="<?php echo $data->getNom()?>" minlength="4" maxlength="30" required>
         </div>
         <div class="col-md-6">
           <input type="text" id="lname" class="form-control" value="<?php echo $data->getPrenom()?>" minlength="4" maxlength="30" required>
         </div>
       </div>

       <div class="row form-group">
         <div class="col-md-12">
           <input type="email" id="email" class="form-control" value="<?php echo $data->getMail()?>" required>
         </div>
       </div>

       <div class="row form-group">
         <div class="col-md-12">
           <input type="password" id="" class="form-control" value="<?php echo $data->getMdp()?>" required>
         </div>
       </div>

       <div class="form-group">
         <input type="submit" value="Valider" class="btn btn-primary">
       </div>

     </form>

 </body>
 </html>
