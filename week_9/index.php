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
    if (isset($_POST['submit'])) {
        $image = $_FILES['image'] ?? null;
        echo "<pre>";
        print_r($image);
        echo "</pre>";
        $image_name = $image['name'];
        $image_path = $image['tmp_name'];
        move_uploaded_file($image_path, 'images/'.$image_name);
    }
    ?>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <br><br>
        <button name="submit">Upload</button>
    </form>
<img src="<?php echo 'images/'.$image_name ?>">
</body>
</html>