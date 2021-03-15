<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get php</title>
    <style>
        table,th,td{
            border:2px solid black;
        }
    </style>
</head>
<body>
    <form action="worker.php" method="get">
    <h1>Get</h1>
        <input type="text" name="user"> - User!
        <br>
        <input type="password" name="pass"> - Password!
        <br>
        <button>Send</button>
    </form>

    <br>
    <hr>
    <?php
        if(isset($_POST['send_post']) && !empty($_POST['user'] && !empty($_POST['pass']))){
    ?>
    <table>
        <tr>
            <th>User</th>
            <th>Password</th>
        </tr>
        <td>
            <?php
                echo $_POST['user']
            ?>
        </td>
        <td>
            <?php
                echo $_POST['pass']
            ?>
        </td>
    </table>
    <?php
        }
    ?>
    <hr>

    <h1>Post</h1>
    <form method="post">
        <input type="text" name="user"> - User!
        <br>
        <input type="password" name="pass"> - Password!
        <br>
        <button name="send_post">Send Post</button>
    </form>
</body>
</html>