<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./csss.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>




<body>
<div class="nav" >
<a href="./dashboard.php">Dashboard</a>
<a  class="active" href="./listprod.php">Mes Produits </a>
<a href="./ajouterProd.php">Ajouter Produits</a>
<a href="./listuser.php">Mes Utilisateurs</a>
<a href="./deconnexion.php">logOut</a>
<a href="">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
    </a>
</div >

    <table class="table table-striped" style="margin-top: 10%;">
        <tr>
            <th>id</th>
            <th>nomProd</th>
            <th>prixProd</th>
            <th>descProd</th>
            <th>categ</th>
            <th>imgProd</th>
            <th>action</th>
        </tr>


        <?php
        require_once('produit.class.php');
        $us = new produit();
        $res = $us->listprod();

        foreach ($res as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nomProd'] . "</td>";
            echo "<td>" . $row['prix'] . "</td>";
            echo "<td>" . $row['descProd'] . "</td>";
            echo "<td>" . $row['categ'] . "</td>";
            echo "<td><img src='image/" . $row['imgProd'] . "' width='100px' height='100px' /></td>";

            echo "<td><a href='modifformprod.php?id=" . $row['id'] . "'>Edit</a>
            <a href='deleteProd.php?id=" . $row['id'] . "'>Delete</a>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <div class="footer">
            <p>&copy;2023 project | All Rights Reserved</p>
        </div>
</body>