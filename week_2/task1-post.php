<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
    <style>
        form{
            margin-left: 650px;
        }
        input{
            margin: 10px;
        }
        button{
            margin: 10px;
        }
        table,td{
            margin: auto;
            border: 1px solid black;
        }
        td{
            width: 200px;
            height: 50px;
            display: block;
        }

    </style>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="სახელი" name="1">
        <br>
        <input type="text" placeholder="გვარი" name="2">
        <br>
        <input type="text" placeholder="პოზიცია" name="3">
        <br>
        <input type="number" placeholder="ხელფასის რაოდენობა" name="4">
        <br>
        <button name="send_post">Send</button>
    </form>

    <?php
        if(isset($_POST['send_post']) && !empty($_POST['user']) && !empty($_POST['pass'])){
    ?>
    <table>
        <td>
            <?php
                echo $_POST['1']
            ?>
        </td>
        <td>
            <?php
                echo $_POST['2']
            ?>
        </td>
        <td>
            <?php
                echo $_POST['3']
            ?>
        </td>
        <td>
            <?php
                echo $_POST['4']
            ?>
        </td>
        <td>
            <?php
                echo $_POST['4']*0.2
            ?>
        </td>
        <td>
            <?php
                echo $_POST['4']-$_POST['4']*0.2
            ?>
        </td>
    </table>
    <?php
        }
    ?>
</body>
</html>