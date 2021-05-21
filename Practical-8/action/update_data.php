<?php
require_once "../conn.php";

    $select_query = "SELECT * FROM data";
    $result = mysqli_query($conn, $select_query);
    foreach ($result as $i => $data){
        $title = $data['title'];
        $date = $data['date'];
        $type = $data['type'];
        $text = $data['text'];
        $author = $data['author'];
        $description = $data['description'];

    }

    if (isset($_POST['submit'])) {
        $edit =  $_GET['edit'];

        $title = $_POST['title'];
        $date = $_POST['date'];
        $type = $_POST['type'];
        $photo = $_POST['photo'];
        $text = $_POST['text'];
        $author = $_POST['author'];
        $description = $_POST['desc'];

        $edit_query = "UPDATE data SET title='$title', date='$date', type='$type', photo='$photo', text='$text', author='$author', description='$description' WHERE id = '$edit'";


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
        <input type="date" class="form-control" name="date" placeholder="Date" value="<?php echo $date?>">
        <input type="text" class="form-control" name="type" placeholder="Type" value="<?php echo $type?>">
        <input class="form-control" type="file" name="photo">
        <textarea name="text" cols="30" rows="10" class="form-control" placeholder="Enter Text..." ></textarea>
        <input type="text" class="form-control" name="author" placeholder="Author" value="<?php echo $author?>">
        <input type="text" class="form-control" name="desc" placeholder="Description" value="<?php echo $description?>">
        <button class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>