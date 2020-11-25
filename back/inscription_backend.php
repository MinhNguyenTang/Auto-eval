<?php
/**
* Sign up processing
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$new_user = new user($_POST);
$manager = new manager();

$new_user->setRole_user('user');
$result = $manager->insert_user($new_user);
if($result==1)
{
  echo $result;
  header('Location: ../forms/sign_in.php');
} else {
  echo $result;
  header('Location: ../forms/sign_up.php');
}
 ?>
