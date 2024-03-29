<?php
require_once('user.class.php');
$us = new user();
$us->deleteuser($_GET['id']);
header('location:listUser.php');
?>
