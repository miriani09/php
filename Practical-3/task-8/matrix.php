<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input{
            width: 50px;
            border-radius: 5px;
        }
        button{
            width: 70px;
            height: 30px;
            border-radius: 5px;
            margin-left: 25px;
        }
        table,tr,td,th{
            width: 500px;
            height: 50px;
            border: solid 1px black;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form method="post">
        enter matrix - row and col:
        <br>
        <input type="number" name="row"> - <input type="number" name="col">
        <br>
        <br>
        enter number range:
        <br>
        <input type="number" name="num1"> - <input type="number" name="num2">
        <br><br>
        <button name="send">Submit</button>
        <hr>
    </form>

    <?php
        $matrix = [];

        for ($i = 0; $i < $_POST['row']; $i++){

            for ($j = 0; $j < $_POST['col']; $j++){

                $rand1 = rand($_POST['num1'], $_POST['num2']);
                $matrix[$i][$j] = $rand1;
            }
        }
    echo "<pre>";
        print_r($matrix);
    echo "</pre>";
    ?>
</body>
</html>