<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='csss.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



<body>
<div class="nav" >
<a href="./dashboard.php">Dashboard</a>
<a   href="./listprod.php">Mes Produits </a>
<a href="./ajouterProd.php">Ajouter Produits</a>
<a class="active" href="./listuser.php">Mes Utilisateurs</a>
<a href="./deconnexion.php">logOut</a>
<a href="">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
    </a>
</div >
<?php
    require_once('user.class.php');
    $us = new user();
    $res = $us->listuser();
    ?>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>email</th>
            <th>tel</th>
            <th>password</th>
            <th>action</th>
            
        </tr>
        <?php
        foreach ($res as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['prenom'] . "</td>";
            echo "<td>" . $row['adresse'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['tel'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td><a href='modifformuser.php?id=" . $row['id'] . "'>Edit</a> 
            <a href='deleteUser.php?id=" . $row['id'] . "'>Delete</a>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
         <div class="footer">
        <p>&copy;2023 project | All Rights Reserved</p>
    </div>
</body>