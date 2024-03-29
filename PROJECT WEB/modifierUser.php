<?php
require_once('user.class.php');
$us = new user();
$us->id = $_POST['id'];
$us->nom = $_POST['nom'];
$us->prenom = $_POST['prenom'];
$us->adresse = $_POST['adresse'];
$us->email = $_POST['email'];
$us->tel = $_POST['tel'];
$us->password = $_POST['password'];
$us->updateuser($_POST['id']);
header('location:indexc.php');
?>
