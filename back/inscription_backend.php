<?php
/**
* Sign up processing
*/
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/formateur.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');
$new_user = new user($_POST);
$new_formateur = new formateur($_POST);
$manager = new manager();
if(isset($_POST['nom_spe']))
{
  $new_user->setRole_user('formateur');
  $new_medecin->setId_specialite($_POST['nom_spe']);
  $manager->add_formateurs($new_user,$new_formateur);
  header('Location: ../web/admin.php');
}
else
{
  $new_user->setRole_user('user');
  $verif = $manager->insert_user($new_user);
  if($verif==1)
  {
    echo $verif;
    header('Location: ../forms/sign_in.php');
  }
  elseif($verif==0) {
    echo $verif;
    header('Location: ../forms/sign_up.php');
  }
}
 ?>
