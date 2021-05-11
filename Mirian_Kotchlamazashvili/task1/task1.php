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
        if (!is_dir('Files')){
            mkdir('Files');
        }
        if (isset($_POST['submit'])) {
            $target_file = 'Files/' . basename($_FILES["fileToUpload"]["name"]);

            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
            }

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $files = scandir('Files/');
        for ($i = 1; $i < count($files); $i++){
            $name = $files[$i]."-ატვირთვა ".$i;
            echo '<p><a href="upload.php?file='.$i.'">'.$name.'</a></p>';
            $len = strlen($name);
            file_put_contents('Files/'.$name, rand(0, $len));
        }
        echo "<hr>";

    ?>
</body>
</html>