<?php
include "../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/Hopital/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Hopital/back/entity/spe.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Hopital/back/entity/user.php');
 ?>

<!doctype html>
<html>
<body>

  <div class="container">
    <h3>Informations personnelles</h3>
  </div>
  <table class="table table-bordered container" style="margin-top: 100px;">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse mail</th>
        <th></th>
      </tr>
    </thead>
    <?php
    $manager = new manager();
    $p_data = $manager->recovery_data(unserialize($_SESSION['user'])->getId());
    $p_data = unserialize($_SESSION['user']);
     ?>
     <tbody>
       <td><?php echo $p_data->getNom() ?></td>
       <td><?php echo $p_data->getPrenom() ?></td>
       <td><?php echo $p_data->getMail() ?></td>
       <td>
         <form action="../forms/uptodate.php" method="post">
           <input type="hidden" value="<?php echo $a->getId() ?>" name="id">
           <input type="submit" value="Modifier">
         </form>
       </td>
     </tbody>
</body>
</html>
