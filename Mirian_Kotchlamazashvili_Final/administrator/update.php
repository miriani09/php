<?php
require_once "../sql-conn/conn.php";

$edit = $_GET['edit'];
$select_query = "SELECT * FROM administrator WHERE id = '$edit'";
$result = mysqli_query($conn, $select_query);

foreach ($result as $items) {
    $name = $items['name'];
    $id_number = $items['id_number'];
    $date = $items['date'];
    $password = $items['password'];
}

if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];

    $name = $_POST['name'];
    $id_number= $_POST['id_number'];
    $date = $_POST['date'];
    $password = $_POST['password'];

    if (strlen($name) >= 2 && strlen($name) <= 10 && strlen($id_number) == 9) {
        $edit_query = "UPDATE administrator SET name='$name',id_number='$id_number',date='$date',password='$password' WHERE id = '$edit'";

        if (mysqli_query($conn, $edit_query)) {
            header("location:list_applicant.php");
        } else {
            echo "error: " . $edit_query . "<br>" . mysqli_error($conn);
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
    <h1 style="text-align: center"><a href="../index.php" class="link">Edit CV</a></h1>
    <hr>
    <form method="post" class="form1" style="width: 400px">
        <input class="form-control" name="name" value="<?php echo $name?>" type="text" placeholder="Enter Title" aria-label="default input example">
        <br>
        <input class="form-control" name="id_number" value="<?php echo $id_number?>" type="text" aria-label="default input example">
        <br>
        <input class="form-control" name="date" value="<?php echo $date?>" type="text" aria-label="default input example">
        <br>
        <input class="form-control" name="password" value="<?php echo $password?>" type="password" aria-label="default input example">
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
        <button name="cancel" class="btn btn-danger"><a href="administrator.php" style="text-decoration: none;color: white">Cancel</a></button>
    </form>
</body>
</html>