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
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php" style="text-decoration: none;color: black">Food Recipe</a></h1>
    <form action="" method="get" class="form1">
        <input class="form-control" name="title" type="text" placeholder="Enter food name" aria-label="default input example">
        <br>
        <textarea class="form-control" name="description" type="text" rows="5" placeholder="Enter Recipe..." aria-label="default input example"></textarea>
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table w-100 p-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Recipe</th>
            <th></th>
        </tr>
        </thead>
        <?php
            $select_query = "SELECT * FROM foods ORDER BY RAND() LIMIT 3";
            $result = mysqli_query($conn, $select_query);

            foreach ($result as $i => $items){
        ?>
        <tbody>
        <tr>
            <th scope="row"><?php echo $i+1?></th>
            <td><?php echo $items['title']?></td>
            <td><?php echo $items['description']?></td>
            <td>
                <a href="./sql-connect/update.php?edit=<?=$items['id']?>" type="button" class="btn btn-primary">Edit</a>
                <a href="./sql-connect/comments.php?food=<?=$items['id']?>" type="button" class="btn btn-success">Comment</a>
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