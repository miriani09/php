<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="quantity random number" name="quantity">

        <input type="text" placeholder="enter random a number" name="a">

        <input type="text" placeholder="enter random b number" name="b">

        <button name="send">Submit</button>
    </form>

    <?php
        if (isset($_GET['send'])){
            $quantity = $_GET['quantity'];
            $a = $_GET['a'];
            $b = $_GET['b'];
            $arr = [];
            for ($i = 0; $i < $quantity; $i++){
                    $rand = rand($a, $b);
                    $s = file_put_contents('numbers.txt', $rand.',',FILE_APPEND);
                    array_push($arr, $rand);
            }

            foreach ($arr as $v){
                if ($v > 0 && $v < 100){
                    echo $v.',';
                }
            }


        }
    ?>
</body>
</html>