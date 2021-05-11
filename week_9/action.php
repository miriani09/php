<?php
    require_once "test_sql.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>action</title>
</head>
<body>
    <header></header>
    <nav>
        <ul>
            <li><a href="action.php">Actions</a></li>
            <li><a href="?action=insert">Insert</a></li>
        </ul>
    </nav>
    <main>
        <?php
            if (isset($_GET['action']) && $_GET['action'] == "insert"){
                include "action/insert.php";
            }else{
                include "action/categories.php";
            }
        ?>
    </main>
</body>
</html>