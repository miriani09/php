<?php
require_once "conn.php";

$select_query = "SELECT * FROM foods";
$result = mysqli_query($conn, $select_query);

foreach ($result as $i => $items) {
    $title = $items['title'];
    $description = $items['description'];
}
if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];

    $title = $_POST['update_title'];
    $description = $_POST['update_description'];

    $edit_query = "UPDATE foods SET title='$title',description='$description' WHERE id = '$edit'";

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
<h1><a href="../index.php" style="text-decoration: none;color: black">Edit Food Recipe</a></h1>
<form method="post" class="form1">
    <input class="form-control" name="update_title" value="<?php echo $title?>"  type="text" placeholder="Enter food name" aria-label="default input example">
    <br>
    <textarea class="form-control" name="update_description" type="text" rows="10" placeholder="Enter Recipe..." aria-label="default input example"><?php echo htmlspecialchars($description);?></textarea>
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>