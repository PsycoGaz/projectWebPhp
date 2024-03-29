<!DOCTYPE html>
<html lang="en">
<head>  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
            session_start();

    ?>
    <div class="nav">
        <a class="active" href="./index.html">logo</a>
        <a href="./pages/homme.html">Homme </a>
        <a href="./pages/femme.html">Femme</a>
        <a href="./pages/homme.html">Enfants</a>
        <a href="./pages/panier.html">panier</a>
        <?php
        if (isset($_SESSION['login'])) {
            echo "<a href='listUser.php'>Liste des utilisateurs</a>";
            echo "<a href='listprod.php'>Liste des produits</a>";
            echo "<a href='logout.php'>logout</a>";
        } else {
            echo "<a href='login.php'>login</a>";
        }
        ?>
    </div>
    
</body>
</html>