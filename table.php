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
        .antraste{
            background: #0069d9;
        }
    </style>
</head>
<body>
    <?php include 'navBar.php';?>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <table border="1" class="table">
            <?php for ($y=1; $y<11; $y++){ ?>
                <tr>
                    <?php for ($i=1; $i<11; $i++){ ?>
                        <td <?= ($y==1 || $i==1)?' class="antraste"':''?>>
                            <?php
                            if (rand(0, 100)<20 || $y==1 || $i==1)
                                echo $y*$i?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>