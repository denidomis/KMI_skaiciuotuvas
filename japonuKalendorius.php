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
            text-align: center;
            color: white;
            flex-direction: column;
        }
        .newRow {

        }
    </style>
</head>
<body>
<?php include 'navBar.php';?>
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
    $sk = ($metai-4)%60+1;

    $numerisCikle = ($sk+10)%10;

    switch ($numerisCikle) {
        case 1:
        case 2:
            return "ŽALIA";
        case 3:
        case 4:
            return "RAUDONA";
        case 5:
        case 6:
            return "GELTONA";
        case 7:
        case 8:
            return "BALTA";
        case 9:
        case 10:
            return "JUODA";
        default:
            return "Nėra duomenų";
    }
}

$spalva = nustatytiSpalvaPagalKalendoriu($metai);
?>
    <div class="newRow">
        <h5 class="card-title">Spalva:</h5>
        <p class="card-text"> <?= $spalva ?> </p>
    </div>
</div>
</body>
</html>
