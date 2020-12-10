<?php
/**
*
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/bacl/manager/manager.php');

$manager = new manager();
$users = $manager->delete();

 ?>
