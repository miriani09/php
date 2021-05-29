<?php
    require_once "../sql-connect/conn.php";


if (isset($_GET['delete'])) {
    $del = $_GET['delete'];
    $del_query = "DELETE FROM book WHERE id = '$del'";
    if (mysqli_query($conn, $del_query)) {
        header("location:view_books.php?category= 1");
    } else {
        echo "error: " . $del_query . "<br>" . mysqli_error($conn);
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
    <link rel="stylesheet" href="../style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>
    <?php
        include "admin.php";
    ?>
    <br>

    <table class="table w-100 p-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Pdf</th>
            <th scope="col">Category</th>
            <th></th>
        </tr>
        </thead>
        <?php
        if (isset($_GET['category'])){

        $category = $_GET['category'];
        $select_query = "SELECT * FROM book WHERE category_id = '$category'";
        $result = mysqli_query($conn, $select_query);

        foreach ($result as $i => $items){
        ?>
        <tbody>
        <tr>
            <th scope="row"><?php echo $i+1?></th>
            <td><?php echo $items['title']?></td>
            <td> <img src="<?php echo $items['image'] ?>" alt="" style="width: 50px; height: 50px;"></td>
            <td><a href="<?php echo $items['pdf']?>" target="_blank"><?php echo $items['pdf']?></a></td>
            <td><?php echo $items['category_id']?></td>
            <td>
                <a href="update.php?edit=<?=$items['id']?>" type="button" class="btn btn-success">Edit</a>

                <a href="view_books.php?delete=<?=$items['id']?>?c=<?=$items['category_id']?>" type="button" class="btn btn-danger">Delete</a>

            </td>
        </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>
</body>
</html>