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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
        .antraste{
            background: #0069d9;
        }
    </style>
</head>
<body>
    <?php include 'navBar.php';?>
    <div class="container">
        <?php
        $a = $_POST['size1'] + 1;
        $b = $_POST['size2'] + 1;
        $rank = $_POST['percent']
        ?>
        <table border="1" class="table">
            <?php for ($y=1; $y<$a; $y++){ ?>
                <tr>
                    <?php for ($i=1; $i<$b; $i++){ ?>
                        <td <?= ($y==1 || $i==1)?' class="antraste"':''?>>
                            <?php
                            if (rand(0, 100)<$rank || $y==1 || $i==1)
                                echo $y*$i?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        <a class="btn btn-primary" href="užduočių_generatorius.php">Atgal</a>
    </div>
</body>
</html>