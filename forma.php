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