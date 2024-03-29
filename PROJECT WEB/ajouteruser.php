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
    <div class="nav">

        <a class="active" href="./index.html">logo</a>
        <a href="./homme.html">Homme </a>
        <a href="./femme.html">Femme</a>
        <a href="./homme.html">Enfants</a>
        <a href="./accessoire.html">Accessoire</a>
        <a href="./login.php">login</a>
    </div>


    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 135px;">
        <form method="post" action="enregUser.php" style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 30%; margin-top: 30px;">
            <table class="table table-striped">

                <tr>
                    <td>Nom </td>
                    <td><input type="text" name="nom"></td>
                </tr>
                <tr>
                    <td>Prenom </td>
                    <td><input type="text" name="prenom"></td>
                </tr>
                <tr>
                    <td>Adresse </td>
                    <td><input type="text" name="adresse"></td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Tel </td>
                    <td><input type="text" name="tel"></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td><input type="password" name="password"></td>
                </tr>


                <tr>
                    <td><input type="submit" name="Submit" value="Sign Up"> </td>
                    <td> </td>
                </tr>
            </table>

        </form>
    </div>
    <div class="footer">
        <p>&copy;2023 project | All Rights Reserved</p>
    </div>
</body>

</html>