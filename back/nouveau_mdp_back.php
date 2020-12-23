<?php
/**
*
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$new_pwd = new user($_POST);
$manager = new manager();
$manager->nouveau_mdp($new_pwd);
 ?>
