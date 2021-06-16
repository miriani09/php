<?php
require_once "../sql-conn/conn.php";


if (isset($_GET['submit'])){
    $name = $_GET['name'];
    $id_number= $_GET['id_number'];
    $date = $_GET['date'];
    $password = $_GET['password'];
    if (strlen($name) >= 2 && strlen($name) <= 10 && strlen($id_number) == 9){
        $insert = "INSERT INTO administrator(name, id_number, date, password)
                VALUES ('$name', '$id_number', '$date', '$password')";
        if (mysqli_query($conn, $insert)){
            header("location:administrator.php");
        }else{
            echo "error: " . $insert . "<br>" . mysqli_error($conn);
        }
    }else{
        echo '<script>alert("enter correct name or ID number")</script>';
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
    <title>CV</title>
</head>
<body>
<h1 style="text-align: center"><a href="administrator.php" class="link">Add CV</a></h1>
<hr>

<form action="" method="get" class="form1" style="width: 400px; margin-left: 30px">
    <input class="form-control" name="name" type="text" placeholder="Title" aria-label="default input example">
    <br>
    <input class="form-control" name="id_number" type="text" placeholder="Id-Number" aria-label="default input example">
    <br>
    <input class="form-control" name="date" type="date" placeholder="Date" aria-label="default input example">
    <br>
    <input class="form-control" name="password" type="password" placeholder="Password" aria-label="default input example">
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
    <button name="cancel" class="btn btn-danger"><a href="administrator.php" style="text-decoration: none;color: white">Cancel</a></button>
</form>

</body>
</html>