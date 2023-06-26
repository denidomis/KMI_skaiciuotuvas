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
        }
        a {
            color: white;
            text-decoration: none;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .row {
            justify-content: center;
        }
        .mb-4_5 {
            margin-bottom: 32px !important;
    </style>
</head>
<body>
<?php include 'navBar.php';?>
<div class="container d-flex justify-content-sm-center align-items-center vh-100">
    <form action="table.php" method="POST" novalidate="novalidate">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Dydis</label>
            <div class="col-sm-4">
                <input type="number" name="size1" class="form-control" value="10">
            </div> :
            <div class="col-sm-4">
                <input type="number" name="size2" class="form-control" value="10">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label mr-2 pt-0">Užpildytumo procentai</label>
            <div class="col-sm-8">
                <input type="number" name="percent" class="form-control" value="50">
            </div>
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary mfc d-block d-md-inline mb-2 mb-md-0 mr-0 mr-md-2">Generuoti</button>
            <button type="reset" class="btn mfc d-block d-md-inline mb-2 mb-md-0 mr-0 mr-md-2">Atstatyti formą</button>
        </div>
    </form>
</div>
</body>

</html>