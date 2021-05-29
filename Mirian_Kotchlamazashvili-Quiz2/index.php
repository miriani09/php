<?php
require_once "./sql-connect/conn.php";
include "./sql-connect/queries.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Book</title>
</head>
<body>
<h1><a href="index.php" style="text-decoration: none;color: black">Add Books</a></h1>
<form action="" method="get" class="form1">
    <input class="form-control" name="title" type="text" placeholder="Enter Title" aria-label="default input example">
    <br>
    <input class="form-control" name="author" type="text" placeholder="Author" aria-label="default input example">
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table w-100 p-3">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Pages</th>
        <th scope="col">Price</th>
        <th scope="col">Code</th>
        <th scope="col">Author</th>
        <th></th>
    </tr>
    </thead>
    <?php
    $select_query = "SELECT * FROM info ORDER BY RAND() LIMIT 5";
    $result = mysqli_query($conn, $select_query);

    foreach ($result as $i => $items){
    ?>
    <tbody>
    <tr>
        <th scope="row"><?php echo $i+1?></th>
        <td><?php echo $items['title']?></td>
        <td><?php echo $items['pages']?></td>
        <td><?php echo $items['price'].".Gel"?></td>
        <td><?php echo $items['code']?></td>
        <td><?php echo $items['author']?></td>
        <td>
            <a href="./sql-connect/update.php?edit=<?=$items['id']?>" type="button" class="btn btn-primary">Edit</a>
            <a href="?delete=<?=$items['id']?>" type="button" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<?php
?>
</body>
</html>