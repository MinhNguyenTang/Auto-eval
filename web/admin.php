<!doctype html>
<html>

<?php
include "../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/spe.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');
 ?>

<body style="background-image: url('/Auto-eval/images/login-background.jpg');background-repeat: no-repeat">

  <div class="container">
    <div class="row form-group">
      <div class="title">
        <h3>Tableau de bord</h3>
      </div>
    </div>
    <div class="row form-group">
      <div class="title">
        <h4>Formateurs<h4>
      </div>

        <table class="table table-bordered container" style="margin-top: 100px;background-color: rgba(170, 170, 170, 0.95)">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Spécialités</th>
              <th scope="col">Rôles</th>
            </tr>
          </thead>
          <?php
          $manager = new manager();
          if(unserialize($_SESSION['user'])->getRole_user()=="formateur") {
            $formateurs = $manager->afficher_formateurs();
           ?>
          <tbody>
            <tr>
              <?php foreach($formateurs as $key => $value) { ?>
              <td><?php echo $value['nom']; ?></td>
              <td><?php echo $value['prenom']; ?></td>
              <td><?php echo $value['nom_spe']; ?></td>
              <td><?php echo $value['role_user']; ?></td>
              <td>
                <form action="../back/supprimer_back.php" method="post">
                  <input type="submit" class="btn btn-secondary" value="Supprimer">
                </form>
              </td>
              <?php } ?>
            </tr>
          </tbody>
        <?php } ?>
        </table>

      <div class="form-group row">
        <div class="title">
          <h4>Stagiaires</h4>
        </div>
      </div>

        <table class="table table-bordered container" style="margin-top: 100px;background-color: rgba(170, 170, 170, 0.95)">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Rôles</th>
            </tr>
          </thead>
          <?php
          $manager = new manager();
          if(unserialize($_SESSION['user'])->getRole_user()=="user") {
            $stagiaires = $manager->afficher_stagiaires();
           ?>
          <tbody>
            <tr>
              <?php foreach($stagiaires as $key => $value) { ?>
                <td><?php echo $value['nom']; ?></td>
                <td><?php echo $value['prenom']; ?></td>
                <td><?php echo $value['role_user']; ?></td>
                <td>
                  <form action="../back/supprimer_back.php" method="post">
                    <input type="submit" class="btn btn-secondary" value="Supprimer">
                  </form>
                </td>
                <?php } ?>
              </tr>
          </tbody>
        <?php } ?>
      </table>
    </div>
  </div>


  <div class="form-group row">
    <div class="txt">
      <h4>En bonus</h4>
      <p>
        Pour ajouter de nouvelles personnes
      </p>
    </div>
    <div class="btn">
      <a href="../forms/nouveau_formateur.php" class="btn btn-info">Ajouter un formateur</a>
      <a href="../forms/nouveau_admin.php" class="btn btn-info">Ajouter un administrateur</a>
    </div>
  </div>

  <?php
  include "../include/footer.php";
   ?>
</body>
</html>
