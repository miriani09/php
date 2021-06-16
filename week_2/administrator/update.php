<?php
require_once "../sql-conn/conn.php";

$edit = $_GET['edit'];
$select_query = "SELECT * FROM aplicant WHERE id = '$edit'";
$result = mysqli_query($conn, $select_query);

foreach ($result as $i => $items) {
    $title = $items['title'];
    $id = $items['id_code'];
    $date = $items['date'];
    $password = $items['password'];
}

function rand_string($length = 4) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];

    $title = $_POST['title'];
    $id= $_POST['id'];
    $date = $_POST['date'];
    $password = rand_string().rand(0,9);

    if (strlen($title) >= 5 && strlen($title) <= 10 && strlen($id) == 9){
        $edit_query = "UPDATE aplicant SET title='$title',id_code='$id',date='$date',password='$password' WHERE id = '$edit'";
        if (mysqli_query($conn, $edit_query)){
            header("location:administrator.php");
        }
    }else{
        echo '<script>alert("enter correct")</script>';
    }

    if (mysqli_query($conn, $edit_query)) {
        header("location:administrator.php");
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
    <h1 style="text-align: center"><a href="../index.php" class="link">Vacancy</a></h1>
    <hr>
    <h1><a href="../index.php" style="text-decoration: none;color: black">Edit Company</a></h1>
    <form method="post" class="form1" style="width: 400px">
        <input class="form-control" name="title" value="<?php echo $title?>" type="text" placeholder="Enter Title" aria-label="default input example">
        <br>
        <input class="form-control" name="id" value="<?php echo $id?>" type="text" aria-label="default input example">
        <br>
        <input class="form-control" name="date" value="<?php echo $date?>" type="text" aria-label="default input example">
        <br>
        <input class="form-control" name="password" value="<?php echo $password?>" type="text" aria-label="default input example">
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
        <button name="cancel" class="btn btn-danger"><a href="administrator.php" style="text-decoration: none;color: white">Cancel</a></button>
    </form>
</body>
</html>