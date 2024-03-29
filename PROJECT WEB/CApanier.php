<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ./login.php');
    exit();
} ?>
<?php

require_once('panier.class.php');
$us = new Panier();
$us->setIdUser($_SESSION['login']);
$us->setIdProd($_GET['id']);
header('Location: ./panier.php')
?>