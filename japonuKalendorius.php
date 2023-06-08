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
<nav class="navbar navbar-dark bg-primary navbar-expand-lg d-flex justify-content-center">
    <a class="navbar-brand" href="#">Navbar</a>
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-5">
    <form  method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Metai:</label>
            <input name="metai" type="text" class="form-control" id="formGroupExampleInput" placeholder="metai">
        </div>
        <div class="form-group">
            <input type="submit" value="Atrasti spalva" class="form-control btn btn-primary" id="formGroupExampleInput2">
        </div>
    </form>
<?php
$metai = isset($_POST['metai']) ? $_POST['metai'] : null;

function nustatytiSpalvaPagalKalendoriu($metai) {
    $cikloIlga = 60; // Ciklo ilgis

    // Apskaičiuojame numerį metų cikle
    $numerisCikle = ($metai - 1983) % $cikloIlga;

    // Nustatome spalvą pagal numerį cikle
    switch ($numerisCikle) {
        case 1:
        case 2:
        case 11:
        case 12:
        case 21:
        case 22:
        case 31:
        case 32:
        case 41:
        case 42:
        case 51:
        case 52:
            return "ŽALIA";
        case 3:
        case 4:
        case 13:
        case 14:
        case 23:
        case 24:
        case 33:
        case 34:
        case 43:
        case 44:
        case 53:
        case 54:
            return "RAUDONA";
        case 5:
        case 6:
        case 15:
        case 16:
        case 25:
        case 26:
        case 35:
        case 36:
        case 45:
        case 46:
        case 55:
        case 56:
            return "GELTONA";
        case 7:
        case 8:
        case 17:
        case 18:
        case 27:
        case 28:
        case 37:
        case 38:
        case 47:
        case 48:
        case 57:
        case 58:
            return "BALTA";
        case 9:
        case 10:
        case 19:
        case 20:
        case 29:
        case 30:
        case 39:
        case 40:
        case 49:
        case 50:
        case 59:
        case 0:
            return "JUODA";
        default:
            return "Nėra duomenų";
    }
}

$spalva = nustatytiSpalvaPagalKalendoriu($metai);
?>
<h5 class="card-title">Spalva:</h5>
<p class="card-text"> <?= $spalva ?> </p>
</div>
</body>
</html>
