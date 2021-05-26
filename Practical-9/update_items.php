<?php
require_once "./conn.php";

$select_query = "SELECT * FROM items";
$result = mysqli_query($conn, $select_query);
foreach ($result as $i => $item){
    $title = $item['title'];
    $quantity = $item['quantity'];
    $price = $item['price'];

}

if (isset($_POST['submit'])) {
    $edit =  $_GET['edit'];

    $title = $_POST['title'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $edit_query = "UPDATE items SET title='$title',quantity='$quantity',price='$price' WHERE id = '$edit'";


    if (mysqli_query($conn, $edit_query)) {
        header("location: ../index.php");
    } else {
        echo "error: " . $edit_query . "<br>" . mysqli_error($conn);
    }
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<?php
    include "./blocks/header.php"
?>

<form method="post" class="mb-3 div1">
    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $title?>">
    <input type="text" class="form-control" name="quantity" placeholder="Quantity" value="<?php echo $quantity?>">
    <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $price?>">
    <button class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>