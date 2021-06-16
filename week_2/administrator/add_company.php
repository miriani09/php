<?php
require_once "../sql-conn/conn.php";

function rand_string($length = 4) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_GET['submit'])){
    $title = $_GET['title'];
    $id= $_GET['id'];
    $date = date('Y-m-d', strtotime( '+'.mt_rand(0,31).mt_rand(0,12).mt_rand(1950,2021) )); ;
    $password = rand_string().rand(0,9);

    if (strlen($title) >= 5 && strlen($title) <= 10 && strlen($id) == 9){
        $insert = "INSERT INTO aplicant(title, id_code, date, password)
                VALUES ('$title', '$id', '$date', '$password')";
        if (mysqli_query($conn, $insert)){
            header("location:administrator.php");
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
<h1 style="text-align: center"><a href="administrator.php" class="link">Add Company</a></h1>
<hr>

<form action="" method="get" class="form1" style="width: 400px; margin-left: 30px">
    <input class="form-control" name="title" type="text" placeholder="Title" aria-label="default input example">
    <br>
    <input class="form-control" name="id" type="text" placeholder="Id-Code" aria-label="default input example">
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
    <button name="cancel" class="btn btn-danger"><a href="administrator.php" style="text-decoration: none;color: white">Cancel</a></button>
</form>

</body>
</html>