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
        <input type="text" name="pass" placeholder="enter password">
        <br><br>
        <button name="send">Submit</button>
    </form>

    <?php
        if (isset($_POST['send'])) {
            $weak_password = preg_match('/^(?=.*\d)(?=.*[a-z])[0-9a-z]{2,12}$/', $_POST['pass']);
            $medium_password = preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{2,12}$/', $_POST['pass']);
            $strong_password = preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{2,12}$/', $_POST['pass']);
            if ($weak_password) {
                echo '<span style="color:red">Weak Password</span>';
            } elseif ($medium_password) {
                echo '<span style="color:darkorange">Medium Password</span>';
            } elseif ($strong_password) {
                echo '<span style="color:green">Strong Password</span>';
            } else {
                echo "Enter Password";
            }
        }
    ?>
</body>
</html>