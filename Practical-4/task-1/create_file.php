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
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <br>
        <button name="create">Create File</button>
    </form>

    <?php
    if(!is_dir("files")) {
        mkdir("files");
    }
    if(isset($_POST['create'])){
        $text = $_POST['text'];

        $files = scandir("files");
        if (!empty($text)){
        $fileName = date("Ymdhisa-");
        file_put_contents("folder/".$fileName, $text);
        echo "file created";
        }else{
            echo "must be entered text";
        }
    }
    ?>
</body>
</html>