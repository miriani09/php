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
<form  method="post">
    <input  name="a" id="">
    <br>
    <button name="send">Submit</button>
    <select name="select">
        <?php
        for($i = 1950 ; $i < date('Y'); $i++){
            echo "<option>$i</option>";
        }
        ?>
    </select>
    <?php
            $t = $_POST['a'];
            if (ctype_upper($t) == TRUE){
                echo 'correct';
            }else {
                echo 'not correct';
            }
        ?>
</form>
</body>
</html>