<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./csss.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="nav">

        <a class="active" href="./index.php">logo</a>
        <a href="./listprodH.php">Homme </a>
        <a href="./pages/femme.html">Femme</a>
        <a href="./pages/homme.html">Enfants</a>
        <a href="./pages/accessoire.html">Accessoire</a>


    </div>
    <div class="img">
        <img src="./image/indeximg.jpg" style="width: 100%; height: 450px;" alt="">
    </div>
    <div class="welcome">
        <h3>New here?</h3>
        <a href="./ajouteruser.php"><button type="button" class="btn btn-outline-success">Sign Up</button></a>
        <h3>Already have an account?</h3>
        <a href="./login.php"><button type="button" class="btn btn-outline-primary">Sign In</button></a>
        <p class="d-inline-flex gap-1" style="margin-top: 10%;">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    who are we?
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    what do we do?
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
    </div>
    
    
    

    <div class="footer">
        <p>&copy;2023 project | All Rights Reserved</p>
    </div>
</body>

</html>