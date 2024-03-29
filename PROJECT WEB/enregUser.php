<?php
    require_once('user.class.php');
    $et = new user();
    $res = $et->listuser(); 
    
    /* récupération des données du formulaire */
    /*$et->id = $_POST['id'];*/
    $et->nom = $_POST['nom'];
    $et->prenom = $_POST['prenom'];
    $et->adresse = $_POST['adresse'];
    $et->email = $_POST['email'];
    $et->tel = $_POST['tel'];
    $et->password = $_POST['password'];
    $et->adduser();

    // Redirect to index page
    header("Location: indexc.php");
    exit();

?>
