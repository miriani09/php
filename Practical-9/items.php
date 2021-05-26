<?php
    require_once "conn.php";

    if (isset($_POST['submit'])){
        $title = $_POST['title'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $insert = "INSERT INTO items(title, quantity, price)
                VALUES ('$title', '$quantity', '$price')";

        if(mysqli_query($conn, $insert)){
            header("location:index.php");
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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
    include "./blocks/header.php"
?>
<form method="post" class="mb-3 div1 a1">
    <input type="text" class="form-control" name="title" placeholder="Title">
    <input type="text" class="form-control" name="quantity" placeholder="Quantity">
    <input type="text" class="form-control" name="price" placeholder="Price">
    <button class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>