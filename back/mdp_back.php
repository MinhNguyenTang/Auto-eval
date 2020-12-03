<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');

$user = new user($_POST);
$manager = new manager();
$manager->new_mdp($user);
 ?>
