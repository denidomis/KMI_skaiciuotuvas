<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css" >
    <title>Document</title>
    <style>
        body{
            background-image: url("Images/pexels-hasan-albari-1229861.jpg");
            background-size: cover;
            background-position: center;
            overflow-y: hidden;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: transparent;
            border: none;
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg d-flex justify-content-center">
    <a class="navbar-brand" href="base.php">Base</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="forma.php">forma</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="trikampis.php">trikampis</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="japonuKalendorius.php">japonų kalendorius</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <?php
                    $x = $_GET['x'];
                    $y = $_GET['y'];
                    $z = (($y/100)*($y/100));
                    $KMI = $x/ $z;
                    ?>
                    <h5 class="card-title">Jūsų kūno masės indeksas yra:</h5>
                    <p class="card-text"> <?= round($KMI, 2); ?> </p>
                    <a class="btn btn-primary" href="forma.php">Gryžti į skaičiavimą</a>
                </div>
            </div>
    </div>
</div>
</body>
</html>
