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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br><br>
        <button name="upload">Upload</button>
    </form>

    <?php
        if (!is_dir("folder")){
            mkdir("folder");
        }
        if (isset($_POST['upload'])) {
            $file_type = $_FILES['file'];
            echo $file_type;
            file_put_contents('folder/', $file_type);
        }
    ?>

</body>
</html>