<?php
require_once('produit.class.php');
$us = new produit();
$us->id = $_POST['id'];
$us->nomProd = $_POST['nomProd'];
$us->descProd = $_POST['descProd'];
$us->categ = $_POST['categ'];

$us->prix = $_POST['prix'];
$destination = './image/' . $_FILES['imgProd']['name'];

// Check if the directory exists and is writable
if (!is_dir(dirname($destination))) {
    die('The directory does not exist');
} else if (!is_writable(dirname($destination))) {
    die('The directory is not writable');
}

// Check for file upload errors
if ($_FILES['imgProd']['error'] > 0) {
    die('File upload error: ' . $_FILES['imgProd']['error']);
}

// Move the uploaded file
if (!move_uploaded_file($_FILES['imgProd']['tmp_name'], $destination)) {
    die('Failed to move the file');
}

$us->imgProd = $_FILES["imgProd"]["name"];

$us->updateProd($_POST['id']);
header('location:listprod.php');
?>