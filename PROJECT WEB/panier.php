<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ./login.php');
    exit();
} ?>
<?php
require_once('pdo.php');
$cnx = new connexion();
$pdo = $cnx->CNXbase();
$req = "SELECT * FROM panier WHERE id = " . $_SESSION['login'];
// Fetch the products
$res = $pdo->query($req)or print_r($pdo->errorInfo());
$results = $res->fetchAll(PDO::FETCH_ASSOC);
$ids = array_column($results, 'id');
$ids = implode(',', $ids);
require_once('panier.class.php');
$us = new Panier();
$us->selectProd($ids);





   echo" <table class='table table-striped' style='margin-top: 10%;'>
    <tr>
        <th>id</th>
        <th>nomProd</th>
        <th>prixProd</th>
        <th>descProd</th>
        <th>categ</th>
        <th>imgProd</th>
        <th>action</th>
    </tr>";



   

    foreach ($res1 as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nomProd'] . "</td>";
        echo "<td>" . $row['prix'] . "</td>";
        echo "<td>" . $row['descProd'] . "</td>";
        echo "<td>" . $row['categ'] . "</td>";
        echo "<td><img src='image/" . $row['imgProd'] . "' width='100px' height='100px' /></td>";

        echo "<td>
        <a href='del.php?id=" . $row['id'] . "'>Delete</a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>