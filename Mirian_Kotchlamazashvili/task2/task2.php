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
<form method="post">
    <textarea name="text" id="" cols="15" rows="10" placeholder="English word"></textarea>
    <br>
    <button name="create">Create File</button>
</form>

<?php
if(!is_dir("files")) {
    mkdir("files");
}
if(isset($_POST['create'])){
    $text = $_POST['text'].PHP_EOL;
    $len = strlen($text);
    $files = scandir("files");

    if (!empty($text) && $len >=2 && $len <= 50){
        file_put_contents("files/".'lexicon', $text, FILE_APPEND);
    }else{
        echo "must be entered text, from 2-50 word size";
    }
}
?>
</body>
</html>