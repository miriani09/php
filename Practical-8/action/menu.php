<?php
require_once "../conn.php";

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $text = $_POST['text'];

    $insert_date = "INSERT INTO menu(title,text)
                VALUES ('$title', '$text')";

    if (mysqli_query($conn, $insert_date)){
        header("location: ../index.php");
    }else{
        echo "error: " .$insert_date. "<br>" . mysqli_error($conn);
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
    <title>Data</title>
</head>
<body>
    <form method="post" class="mb-3 div1">
        <input type="text" class="form-control" name="title" placeholder="Title">
        <textarea name="text" cols="30" rows="10" class="form-control" placeholder="Enter Text..."></textarea>
        <button class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>