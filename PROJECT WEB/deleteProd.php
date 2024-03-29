<?php
require_once('produit.class.php');
$us = new produit();
$us->deleteProd($_GET['id']);
header('location:listProd.php');
?>
