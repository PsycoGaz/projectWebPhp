<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./csss.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<body>
<div class="nav" >
<a href="./dashboard.php">Dashboard</a>
<a  href="./listprod.php">Mes Produits </a>
<a href="./ajouterProd.php">Ajouter Produits</a>
<a  class="active" href="./listuser.php">Mes Utilisateurs</a>
<a href="./deconnexion.php">logOut</a>
<a href="">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
    </a>
</div >


    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 10%;">
        <form enctype="multipart/form-data" method="post" action="enregProd.php" style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 30%; margin-top: 30px;">
            <table class="table table-striped">

                <tr>
                    <td>nomProd </td>
                    <td><input type="text" name="nomProd"></td>
                </tr>
                <tr>
                    <td>prixProd </td>
                    <td><input type="text" name="prix"></td>
                </tr>
                <tr>
                    <td>descProd </td>
                    <td><input type="text" name="descProd"></td>
                </tr>
                <tr>
                    <td>categ </td>
                    <td>
                        <select name="categ">
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                            <option value="Enfant">Enfant</option>
                            <option value="Accessoires">Accessoires</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>imgProd </td>
                    <td><input type="file" name="imgProd"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Add" />
                    </td>
                </tr>
            </table>
    </div>
    </form>
    <div class="footer">
        <p>&copy;2023 project | All Rights Reserved</p>
    </div>
</body>

</html>