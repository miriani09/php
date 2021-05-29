<?php
require_once "../sql-connect/conn.php";

$edit = $_GET['edit'];
$select_query = "SELECT * FROM book WHERE id = '$edit'";
$result = mysqli_query($conn, $select_query);

foreach ($result as $items) {
    $title = $items['title'];
    $image = $items['image'];
    $pdf = $items['pdf'];
    $category = $items['category_id'];
}

if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];

    $title = $_POST['title'];
    $image= $_POST['image'];
    $pdf = $_POST['pdf'];
    $category = $_POST['category'];



    $edit_query = "UPDATE book SET title='$title',image='$image',pdf='$pdf',category_id='$category' WHERE id = '$edit'";

    if (mysqli_query($conn, $edit_query)) {
        header("location:view_books.php?category=$category");
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
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    include "admin.php";
?>
<p class="fs-2" style="margin-left: 20px; color: #717070">Edit Books</p>
<form method="post" class="form1">
    <input class="form-control" name="title" value="<?php echo $title?>" type="text" placeholder="Enter Title" aria-label="default input example">
    <br>
    <input class="form-control" name="image" value="<?php echo $image?>" type="file" aria-label="default input example">
    <br>
    <input class="form-control" name="pdf" value="<?php echo $pdf?>" type="file" aria-label="default input example">
    <br>
    <select class="form-select" name="category" aria-label="Default select example">
        <?php
        $select = "SELECT category.title, id FROM category";

        $get = mysqli_query($conn, $select);
        foreach ($get as $item){
            $title = $item['title'];
            $id = $item['id'];
            ?>
            <option value="<?= $id ?>"><?php echo $title ?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>