<?php
/**
* Sign in processing
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$signin = new user($_POST);
$manager = new manager();
$result = $manager->connexion($signin);
session_start();
$_SESSION['user'] = serialize($result);
header('Location: ../index.php');

 ?>
