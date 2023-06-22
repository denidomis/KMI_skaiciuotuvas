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
<?php include 'navBar.php';?>
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
