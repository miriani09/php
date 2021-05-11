<?php
    require_once "mydata.php";
?>
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
    <a href="action.php">Main</a>
    <a href="?action=menu">Menu</a>
    <a href="?action=users">Users</a>
    <a href="?action=data">data</a>
    <?php
        if (isset($_GET['action']) && $_GET['action'] == "menu"){
            echo include "action/menu.php";
        }

        if (isset($_GET['action']) && $_GET['action'] == "users"){
            echo include "action/users.php";
        }

        if (isset($_GET['action']) && $_GET['action'] == "data"){
            echo include "action/data.php";
        }
    ?>
</body>
</html>