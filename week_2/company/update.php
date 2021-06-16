<?php
require_once "../sql-conn/conn.php";

$edit = $_GET['edit'];
$select_query = "SELECT * FROM add_vacancy WHERE id = '$edit'";
$result = mysqli_query($conn, $select_query);

foreach ($result as $i => $items) {
    $title = $items['title'];
    $description = $items['description'];
    $date = $items['date'];
}

if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];

    $title = $_POST['title'];
    $description= $_POST['description'];
    $date = $_POST['date'];

    $edit_query = "UPDATE add_vacancy SET title='$title',description='$description',date='$date' WHERE id = '$edit'";
    if (mysqli_query($conn, $edit_query)){
        header("location:aplicant.php");
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
    <h1 style="text-align: center"><a href="company.php" class="link">Edit Vacancy</a></h1>
    <hr>
    <form method="post" class="form1" style="width: 400px">
        <input class="form-control" name="title" value="<?php echo $title?>" type="text" placeholder="Enter Title" >
        <br>
        <input class="form-control" name="description" value="<?php echo $description?>" type="text" >
        <br>
        <input class="form-control" name="date"  value="<?php echo $date?>" type="date" >
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
        <button name="cancel" class="btn btn-danger"><a href="company.php" style="text-decoration: none;color: white">Cancel</a></button>
    </form>
</body>
</html>