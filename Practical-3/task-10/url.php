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
    <?php
        function url(){
            $url = $_SERVER['REQUEST_URI'];


            if (strpbrk($url, '1234567890') !== FALSE) {
                return 'int exist';
            } else {
                return 'dont exist';
            }
        }

    echo url();
    ?>
</body>
</html>