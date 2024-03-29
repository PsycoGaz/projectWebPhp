<?php
    require_once('produit.class.php');
    $et = new produit();
    $res = $et->listProd(); 
    
/* récupération des données du formulaire */
/*$et->id = $_POST['id'];*/
$et->nomProd = $_POST['nomProd'];
$et->descProd = $_POST['descProd'];
$et->categ = $_POST['categ'];
$et->prix = $_POST['prix'];

// Save the image file
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

$et->imgProd = $_FILES["imgProd"]["name"];

// Add the product to the database
$et->addProd();
header('Location: listProd.php');
?>