<?php
if (isset($_POST['submit'])) {
    $user = $_POST['admin'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "admin") {
        header("location: admin_page.php");
    } else {
        echo "<script>alert('Enter Correct User Or Password')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>E-Book</title>
</head>
<body>

<form method="post" style="margin-top: 100px !important;">
    <div class="form-group">
        <input type="text" name="admin" class="form-control lang_placeholder" aria-describedby="emailHelp"
               placeholder="User">
        <br>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control lang_placeholder" placeholder="Password">
        <br>
    </div>
    <button name="submit" class="btn btn-primary lang">შესვლა</button>
</form>


</body>
</html>