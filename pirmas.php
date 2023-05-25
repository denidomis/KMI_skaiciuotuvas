<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
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
</div>
</body>
</html>
