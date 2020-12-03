<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');

$user = new user($_POST);
$manager = new manager();
$user->setMail($_POST['mail']);
$user->setMdp($_POST['mdp']);
$manager->new_mdp($user);
 ?>
