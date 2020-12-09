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
  $new_formateur->setId_spe($_POST['nom_spe']);
  $manager->inscription($new_user,$new_formateur);
  header('Location: ../web/admin.php');
}
else
{
  $new_user->setRole_user('user');
  $result = $manager->inscription($new_user);
  if($result==1)
  {
    header('Location: ../forms/inscription.php');
  }
  else
  {
    header('Location: ../forms/connexion.php');
  }
}

 ?>
