<?php
require_once "../sql-conn/conn.php";

if (isset($_GET['delete'])){
    $del = $_GET['delete'];
    $delete_company = "DELETE FROM add_vacancy WHERE id = '$del'";
    if (mysqli_query($conn, $delete_company)){
        header("location:list_cv.php");
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
    <title>Book</title>
</head>
<body>
<h1 style="text-align: center"><a href="company.php" class="link">List Vacancy</a></h1>
<hr>

<table class="table w-100 p-3">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Date</th>
        <th></th>
    </tr>
    </thead>
    <?php
    $select_query = "SELECT * FROM add_vacancy";
    $result = mysqli_query($conn, $select_query);

    foreach ($result as $i => $items){
    ?>
    <tbody>
    <tr>
        <th scope="row"><?php echo $i+1?></th>
        <td><?php echo $items['title']?></td>
        <td><?php echo $items['description']?></td>
        <td><?php echo $items['date']?></td>
        <td>
            <a href="update.php?edit=<?=$items['id']?>" type="button" class="btn btn-primary">Edit</a>
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