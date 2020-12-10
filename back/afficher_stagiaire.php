<?php
/**
*
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/manager/manager.php');

$manager = new manager();
$stagiaires = $manager->afficher_stagiaires();

 ?>
