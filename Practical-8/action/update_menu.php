<?php
require_once "../conn.php";

$select_query = "SELECT * FROM menu";
$result = mysqli_query($conn, $select_query);
foreach ($result as $i => $menu){
    $title = $menu['title'];
    $text = $menu['text'];
}

if (isset($_POST['submit'])) {
    $edit =  $_GET['edit'];

    $title = $_POST['title'];
    $text = $_POST['text'];

    $edit_query = "UPDATE menu SET title='$title',text='$text' WHERE id = '$edit'";

    if (mysqli_query($conn, $edit_query)) {
        header("location: ../index.php");
    } else {
        echo "error: " . $edit_query . "<br>" . mysqli_error($conn);
    }
    header("location:../index.php");
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
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<form method="post" class="mb-3 div1">
    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $title?>">
    <textarea name="text" cols="30" rows="10" class="form-control" placeholder="Enter Text..." value="<?php echo $text?>"></textarea>
    <button class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>