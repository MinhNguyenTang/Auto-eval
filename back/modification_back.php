<?php
/**
* Account modification processing
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$user = new user($_POST);
$manager = new manager();
$manager->modification($user);
$res = $manager->get_modification($user);
if($res)
{
  header('Location: ../web/account.php');
} else {
  session_start();
  $_SESSION['user'] = serialize($res);
  header('Location: ../index.php');
}
 ?>
