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
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
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
<div class="container mt-5">
    <form  method="get" action="pirmas.php">
        <div class="form-group">
            <label for="formGroupExampleInput">Svoris (kg)</label>
            <input name="x" type="text" class="form-control" id="formGroupExampleInput" placeholder="kg">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Ugis (cm)</label>
            <input name="y" type="text" class="form-control" id="formGroupExampleInput2" placeholder="cm">
        </div>
        <div class="form-group">
            <input type="submit" value="Skaiciuoti" class="form-control btn btn-primary" id="formGroupExampleInput2">
        </div>
    </form>
</div>
</body>
</html>