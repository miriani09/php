<?php
    require_once "../sql-connect/conn.php";



if (isset($_GET['submit'])) {
        $dir_pic = "../pic_books/it/";
        $dir_pdf = "../pdf/it/";

        $title = $_GET['title'];
        $image = "../pic_books/it/".$_GET['image'];
        $pdf = "../pdf/it/".$_GET['pdf'];

        if (isset($_GET['cat']) && is_numeric($_GET['cat']))
            $category_id = $_GET['cat'];
        else
            $category_id = 0;

        $insert = "INSERT INTO book(title, image, pdf, category_id)
                            VALUES ('$title', '$image', '$pdf' ,'$category_id')";

            if (mysqli_query($conn, $insert)) {
                header('location:add_book.php');
            } else {
                echo "error: " . $insert . "<br>" . mysqli_error($conn);
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
    <link rel="stylesheet" href="../style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Books</title>
</head>
<body>
<?php
    include "admin.php";
?>
<br>

    <p class="fs-2" style="margin-left: 20px; color: #717070">Add Books</p>
    <form action="" method="get" enctype="multipart/form-data" class="form1">
        <input class="form-control" name="title" type="text" placeholder="Enter Book Name" aria-label="default input example">
        <br>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Image</label>
            <input class="form-control" name="image" type="file" >
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload PDF</label>
            <input class="form-control" name="pdf" type="file" >
        </div>
        <br>
        <select class="form-select" name="cat" aria-label="Default select example">
            <option selected>Choose Category</option>
            <option value="1" name="1">Information Technology</option>
            <option value="2" name="2">Architecture</option>
            <option value="3" name="3">Energy</option>
        </select>
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
