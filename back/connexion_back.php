<?php
/**
* Sign in processing
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$signin = new user($_POST);
$manager = new manager();
$res = $manager->connexion($signin);
if($res)
{
  session_start();
  $_SESSION['user'] = serialize($res);
  header('Location: ../index.php');
}
else {
  header('Location: ../forms/connexion.php');
}

 ?>
