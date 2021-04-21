<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Drive</h1>
<form method="post">
    <button name="create_folder">Create Folder</button>
    <button name="create_file">Create File</button>
    <button name="delete_items" class="button3">Delete</button>
    <?php
    if (isset($_POST['create_folder'])){
        echo "<br>";
        echo "<input name='folder_name' placeholder='Enter folder name'>";
        echo "<br>";
        echo "<button class='button1' name='folder'>Create</button>";
        echo "<button class='button2'>Cancel</button>";
    }
    if (isset($_POST['create_file'])){
        echo "<br>";
        echo "<input name='file_name' placeholder='Enter file name'>";
        echo "<br>";
        echo "<textarea cols='25' rows='5' name='text' style='margin-top: 10px;border-radius: 10px' placeholder='Enter text here...'></textarea>";
        echo "<br>";;
        echo "<button class='button1' name='file'>Create</button>";
        echo "<button class='button2'>Cancel</button>";
    }
    if (isset($_POST['delete_items'])){
        echo "<br>";
        echo "<input name='deleted_name' placeholder='Enter name for delete'>";
        echo "<br>";
        echo "<button class='button2' name='delete'>Delete</button>";
        echo "<button class='button1'>Cancel</button>";
    }
    ?>

    <?php
    if (isset($_POST['folder'])) {
        $folder_name = $_POST['folder_name'];
        if(!is_dir($folder_name) && !empty($folder_name)) {
            mkdir("folders/".$folder_name."-Folder");
        }else{
            echo "<p style='color: red'>Must be entered folder name</p>";
        }
    }

    if (isset($_POST['file'])) {
        $file_name = $_POST['file_name'];
        $file_text = $_POST['text'];
        if (!empty($file_text) && !empty($file_name)){
            file_put_contents("folders/".$file_name."-File", $file_text);
        }else{
            echo "<p style='color: red'>Must be entered file name or text</p>";
        }
    }

    if (isset($_POST['delete']) ) {
        if (!empty($_POST['deleted_name'])){
            $delete = $_POST['deleted_name'];
            $del_item = is_dir("folders");

            function deleteDirectory($dir) {
                if (!file_exists($dir)) {
                    return true;
                }
                if (!is_dir($dir)) {
                    return unlink($dir);
                }
                foreach (scandir($dir) as $item) {
                    if ($item == '.' || $item == '..') {
                        continue;
                    }
                    if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                        return false;
                    }
                }
                return rmdir($dir);
            }
            deleteDirectory("folders/".$delete);
        }else{
            echo "<p style='color: red'>Needs to enter file or folder name</p>";
        }
    }
    ?>
</form>
<div class="div2">
    <ul>
        <?php
        $folder = scandir("folders");
        for ($i = 2;$i < count($folder); $i++){
            echo "<li><a href='mini_drive.php?file=".$i."'>".$folder[$i]."</a></li>";
        }
        if(isset($_GET['file'])){
            $file = "folders/".$folder[$_GET['file']];
            echo file_get_contents($file);
        }
        ?>
    </ul>
</div>
</body>
</html>