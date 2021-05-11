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
        if (!is_dir('uploads')){
            mkdir('uploads');
        }
        if (isset($_POST['submit'])) {
            $target_file = 'uploads/' . basename($_FILES["fileToUpload"]["name"]);

            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
            }

            if ($_FILES["fileToUpload"]["size"] > 50000000) {
                echo "Sorry, your file is too large.";
            }

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $files = scandir('uploads/');
        for ($i = 2; $i < count($files); $i++){
            echo '<p><a href="upload.php?file='.$i.'">'.$files[$i].'</a></p>';
            echo '<button><a href="uploads/'.$files[$i].'" download='.$files[$i].'>Download</a></button>';
        }

        echo "<hr>";
        if(isset($_GET['file'])){
            $file = 'uploads/'.$files[$_GET['file']];
            echo nl2br(file_get_contents($file));
        }
    ?>
</body>
</html>