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
            font-size: 40px;
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
    <div class="div1">
        <?php
        if (isset($_POST['send'])){
            if ($_POST['input_num'] == $_POST['numbers']){
                echo 'correct';
                $save = $_POST['numbers'];
            }else {
                echo 'incorrect';
                $save = $_POST['numbers'];
            }
        }
        $rand1 = rand(0, 9);
        $rand2 = rand(0, 9);
        $operator = array('+', '-');
        $randOperator = $operator[rand(0, 1)];
        switch ($randOperator) {
            case '+':
                $finalValue1 = $rand1 + $rand2;
                break;
            case '-':
                $finalValue1 = $rand1 - $rand2;
                break;
        }
        $finalValue = $rand1 . $randOperator . $rand2 ;
        $save = $finalValue1;

        ?>
    </div>

    <form method="post">
        <input type="hidden" name="numbers" value= "<?=$save?>">
        <br>
        <input type="text" name="numbers1" value= "<?=$finalValue?>">
        <br>
        <input type="number" name="input_num" >
        <br><br>
        <button name="send">send</button>
        <br><br>
    </form>
</body>
</html>