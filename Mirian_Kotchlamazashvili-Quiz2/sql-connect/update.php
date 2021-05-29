<?php
require_once "conn.php";
include "queries.php";

$edit = $_GET['edit'];
$select_query = "SELECT * FROM info WHERE id = '$edit'";
$result = mysqli_query($conn, $select_query);

foreach ($result as $i => $items) {
    $title = $items['title'];
    $pages = $items['pages'];
    $price = $items['price'];
    $code = $items['code'];
    $author = $items['author'];
}
if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];

    $title = $_POST['update_title'];
    $pages= rand(50, 1000);
    $price = $pages * 0.20;
    $code = rand_string();
    $author = $_POST['update_author'];

    $edit_query = "UPDATE info SET title='$title',pages='$pages',price='$price',code='$code',author='$author' WHERE id = '$edit'";

    if (mysqli_query($conn, $edit_query)) {
        header("location: ../index.php");
    } else {
        echo "error: " . $edit_query . "<br>" . mysqli_error($conn);
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
    <title>Document</title>
</head>
<body>
    <h1><a href="../index.php" style="text-decoration: none;color: black">Edit Books</a></h1>
    <form method="post" class="form1">
        <input class="form-control" name="update_title" value="<?php echo $title?>" type="text" placeholder="Enter Title" aria-label="default input example">
        <br>
        <input class="form-control" name="update_page" value="<?php echo $pages?>" type="text" aria-label="default input example">
        <br>
        <input class="form-control" name="update_price" value="<?php echo $price?>" type="text" aria-label="default input example">
        <br>
        <input class="form-control" name="update_code" value="<?php echo $code?>" type="text" aria-label="default input example">
        <br>
        <input class="form-control" name="update_author" value="<?php echo $author?>" type="text" placeholder="Author" aria-label="default input example">
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>