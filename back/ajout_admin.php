<?php
/**
* Ajouter administrateurs
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$new_admin = new user($_POST);
$manager = new manager();
$new_admin->setRole_user('admin');
$result = $manager->add_administrateurs();
if($result==1)
{
  echo $result;
  header('Location: ../index.php');
}
else
{
  echo $result;
  header('Location: ../forms/nouveau_admin.php');
}
 ?>
