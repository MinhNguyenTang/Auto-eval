<?php
/**
* Account modification processing
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$user = new user($_POST)
$manager = new manager();
$manager->modify($user);
$result = $manager->get_modification($user);
if($result)
{
  session_start();
  $_SESSION['user'] = serialize($result);
  header('Location: ../index.php');
} else {
  header('Location: ../forms/update.php');
}
 ?>
