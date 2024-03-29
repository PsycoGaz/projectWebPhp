<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ./login.php');
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel='stylesheet' href='./csss.css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</head>



<body>
    <?php
    require_once('produit.class.php');
    $us = new produit();
    $res = $us->getProd($_GET['id']);
    $data = $res->fetchAll(PDO::FETCH_ASSOC);
    $id = $data[0]["id"];
    $nom = $data[0]["nomProd"];
    $prix = $data[0]["prix"];
    $desc = $data[0]["descProd"];
    $categ = $data[0]["categ"];
    $img = $data[0]["imgProd"];

  
    

    ?>
    <div class="nav">

<a class="active" href="./index.html">logo</a>
<a href="./pages/homme.html">Homme </a>
<a href="./pages/femme.html">Femme</a>
<a href="./pages/homme.html">Enfants</a>
<a href="./pages/panier.html">panier</a>
<a href="./pages/login.php">login</a>
</div >
    <form method='post' enctype="multipart/form-data" action='modifProd.php' style="margin-top: 10%;">
        <table>
            <tr>
                <td>id </td>
                <td><input type="text" name="id" value="<?php echo $id ?>" />
                </td>
            </tr>
            <tr>
                <td>nomProd </td>
                <td><input type="text" name="nomProd" value="<?php echo $nom ?>" />
                </td>
            </tr>
            <tr>
                <td>prixProd </td>
                <td><input type="text" name="prix" value="<?php echo $prix ?>" />
                </td>
            </tr>
            <tr>
                <td>descProd </td>
                <td><input type="text" name="descProd" value="<?php echo $desc ?>" />
                </td>
            </tr>
            <tr>
                <td>categ </td>
                <td><input type="text" name="categ" value="<?php echo $categ ?>" />
                </td>
            </tr>
            <tr>
                <td>imgProd </td>
                <td><input type="file" name="imgProd" value="<?php echo $imgProd ?>" />
                </td>
            </tr>

           
            <tr>
                <td><input type="submit" value="modifier" />
                </td>
            </tr>
        </table>
    </form>
    <div class="footer">
        <p>&copy;2023 project | All Rights Reserved</p>
    </div>
</body>

</html>