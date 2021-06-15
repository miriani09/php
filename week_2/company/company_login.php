<?php
require_once "../sql-conn/conn.php";



if (isset($_POST['submit'])){
    $user = $_POST['user'];
    $password = $_POST['password'];

    $select_query = "SELECT title,password FROM company WHERE title = '".$user."' AND password = '".$password."'";
    $result = mysqli_query($conn, $select_query);

    if(mysqli_fetch_array($result) > 0 )
    {
        header("location:company.php");
    }
    else
    {
        echo "<script>alert('Incorrect Password')</script>";
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Book</title>
</head>
<body>
<h1 style="text-align: center"><a href="../index.php" class="link">Vacancy</a></h1>
<hr>

<form method="post" style="width: 400px; margin:auto">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User</label>
        <input type="text" class="form-control" name="user">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>