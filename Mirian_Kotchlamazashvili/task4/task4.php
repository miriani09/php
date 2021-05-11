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
    <form method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <input type="submit" value="Upload File" name="submit">
        <br><br>
    </form>
    <?php

        if (isset($_POST['submit'])) {
            $file_place = basename($_FILES["fileToUpload"]["name"]);

            if (file_exists($file_place)) {
                echo "file already exists.";
            }

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_place)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "there was an error uploading your file.";
            }
        }

        echo "<hr>";
        $folder = scandir("folder");
        for ($i = 2;$i < count($folder); $i++){
            echo "<a href='task4.php?file=".$i."'>".$folder[$i]."</a>";
        }
        echo "<br>";
        $file = file_get_contents('folder/test.txt');
        $arr = explode("===",$file);
        print_r($arr);

    ?>
</body>
</html>