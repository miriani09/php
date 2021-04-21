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
        <button name="create_recipe">Create Recipe</button>
    <br>
    <?php
        if (!is_dir('folder')){
            mkdir('folder');
        }

        if (isset($_POST['create_recipe'])){
            echo "<input type='text' name='r_title' placeholder='enter title'>";
            echo "<br><br>";
            echo "<textarea cols='20' rows='10' name='r_txt' placeholder='enter recipe'></textarea>";
            echo "<br>";;
            echo "<button name='crt'>Create</button>";
        }

        if (isset($_POST['crt'])) {
            $file_name = $_POST['r_title'];
            $file_text = $_POST['r_txt'];
            if (!empty($file_text)) {
                file_put_contents("folder/".$file_name.'.txt', $file_text);
            } else {
                echo "<p style='color: red'>Must be entered file name</p>";
            }
        }
    ?>
    </form>
    <form method="get">
    <ul>
        <?php
        $files = scandir("folder");
        for($i=2; $i<count($files); $i++){
            echo '<p><a href="root.php?file='.$files[$i].'">'.$files[$i].'</a></p>';
        }

        if (isset($_GET['file'])){
            echo file_get_contents('folder/'.$_GET['file']);
            echo "<input type='text' name='txt_edit'>";
            echo "<button name='clk_edit'>Ok</button>";
            if (isset($_GET['clk_edit'])) {
                echo file_put_contents('folder/' . $_GET['file'], $_GET['txt_edit']) ;
            }
        }
        ?>
    </ul>
    </form>
</body>
</html>