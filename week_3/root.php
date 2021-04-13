<!doctype html>
<html lang="en">
<head>
    <title>Root</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="root">
    <h2>Root Folder</h2>
    <?php
    $files = scandir("root");
    for($i=2; $i<count($files); $i++){
        echo '<p><a href="root.php?file='.$i.'">'.$files[$i].'</a></p>';
    }
    ?>
</div>
<div class="file">
    <?php
    if(isset($_GET['file'])){
        $file = "root/".$files[$_GET['file']];
        echo file_get_contents($file);
    }
    ?>
</div>
</body>
</html>