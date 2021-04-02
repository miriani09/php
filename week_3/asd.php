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
    <?php
        $len = $_POST['a'];
        if (is_numeric($len)){
            echo "correct";
        }else {
            echo "not correct";
        }
    ?>
</form>
</body>
</html>