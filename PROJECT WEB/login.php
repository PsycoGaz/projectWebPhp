<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel='stylesheet' href='./csss.css'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>



<?php
require_once('user.class.php');
require_once('pdo.php');
$us = new user();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = $us->login($email, $password);
    $user = $res->fetch();
    if($res->rowCount() > 0){
        echo "login success";
        session_start();
        $_SESSION['login'] = $user['id'];
        if($user['admin'] == 1){
            echo "admin";
            header('Location: dashboard.php');
        }
        else{
            echo "user";
            header('Location: ./indexC.php');
        }
    }else{
        echo "login ou mot de passe incorrect";
    } 
}
?>
<body>
<div class="nav">

<a href="./index.php">logo</a>
<a href="./listprodH.php">Homme </a>
<a href="./pages/femme.html">Femme</a>
<a href="./pages/homme.html">Enfants</a>
<a href="./pages/accessoire.html">Accessoire</a>


</div>
    <div class="container" style="margin-top: 10%;max-width: 600px;">
        <form method='post' action='login.php'>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h7>new here ? <a href="./ajouteruser.php"> Sign Up</a></h7>
    </div>
    <div class="intro">
        

    </div>
    <div class="footer" style="margin-top: 22%;">
        <p>&copy;2023 project | All Rights Reserved</p>
    </div>
    
</body>

</html>