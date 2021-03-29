<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .div1{
            border: solid 1px black;
            width: 200px;
            height: 50px;
            font-size: 20px;
            text-align: center;
            border-radius: 10px;
        }
        input{
            border: solid 1px black;
            width: 199px;
            height: 50px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 20px;
            text-align: center;
        }
        button{
            width: 100px;
            height: 50px;
            border-radius: 10px;
            margin-left: 40px;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="number" name="numbers" placeholder="enter numbers">
        <br><br>
        <button name="send">Submit</button>
        <br><br>
    </form>

    <div class="div1">
        <?php
            if (isset($_POST['send'])){
                $n = strlen($_POST['numbers']);
                echo 'Number of decimal places are: '. $n;
            }
        ?>
    </div>
</body>
</html>