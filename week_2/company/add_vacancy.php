<?php
require_once "../sql-conn/conn.php";

if (isset($_GET['submit'])){
    $title = $_GET['title'];
    $description= $_GET['description'];
    $date = date('Y-m-d');

    if (!empty($title) && !empty($description) && !empty($date)){
        $insert = "INSERT INTO add_vacancy(title, description, date)
                VALUES ('$title','$description', '$date')";
        if (mysqli_query($conn, $insert)){
            header("location:company.php");
        }
    }else{
        echo '<script>alert("enter correct")</script>';
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
<h1 style="text-align: center"><a href="company.php" class="link">Add Vacancy</a></h1>
<hr>

<form method="get" class="form1" style="width: 400px; margin-left: 30px">
    <input class="form-control" name="title" type="text" placeholder="Title" aria-label="default input example">
    <br>
    <input class="form-control" name="description" type="text" placeholder="Description" aria-label="default input example">
    <br>
    <input class="form-control" name="date" type="date" aria-label="default input example">
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
    <button name="cancel" class="btn btn-danger"><a href="../administrator/administrator.php" style="text-decoration: none;color: white">Cancel</a></button>
</form>

</body>
</html>