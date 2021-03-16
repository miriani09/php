<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-size: 20px;
        }
    </style>
</head>
<body>

<h2>Given array</h2>
<?php
$arr = [11, 32, 21, 49, 53, 36, 25, 12, 56, 87, 74, 96];

echo "<pre>";

print_r($arr);

echo "<hr>";

echo "</pre>";

?>

<form method="post">
    <label for="">Enter "X" number: </label>;

    <label><input type="number" name="number"></label>;

    <button name="send">Submit</button>;
</form>

<?php
if(isset($_POST['send']) && !empty($_POST["number"])) {
    ?>
    <?php

    echo "<hr>";
    $count = 0;
    foreach($arr as $value){
        if( $value > $_POST["number"] ){
            echo "$value <br>";
            $count += 1;
        }
    }
    echo "X - ricxvze meti elementebi masivshi aris : $count";

    echo "<hr>";

    $count = 0;
    foreach($arr as $value){
        if( $value < $_POST["number"] ){
            echo "$value <br>";
            $count += 1;
        }
    }
    echo "X - ricxvze naklebi elementebi masivshi aris : $count";
    echo "<hr>";
    ?>
    <?php
}
?>
</body>
</html>