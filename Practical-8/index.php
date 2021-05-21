<?php
    require_once "conn.php";
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
    <form method="get">
        <a href="index.php" type="button" class="btn btn-primary" >Main</a>
        <a href="action/data.php" type="button" class="btn btn-primary" >Data</a>
        <a href="action/menu.php" type="button" class="btn btn-primary" >Menu</a>
        <a href="action/users.php" type="button" class="btn btn-primary" >Users</a>
    </form>

    <table class="table" >
        <h4>Data Info</h4>
        <thead>
        <tr>
            <th scope="col">#</th>
            <td>Title</td>
            <td>Date</td>
            <td>Type</td>
            <td>Photo</td>
            <td>Text</td>
            <td>Author</td>
            <td>Description</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $select_query = "SELECT * FROM data";
        $result = mysqli_query($conn, $select_query);

        foreach ($result as $i => $data){ ?>
            <tr>
                <th scope="row"><?php echo $i + 1 ?></th>

                <td> <?php echo $data['title'] ?> </td>

                <td> <?php echo $data['date'] ?> </td>

                <td> <?php echo $data['type'] ?> </td>

                <td> <?php echo $data['photo'] ?> </td>

                <td> <?php echo $data['text'] ?> </td>

                <td> <?php echo $data['author'] ?> </td>

                <td> <?php echo $data['description'] ?> </td>
                <td>
                <form method="get">
                    <a href="./action/update_data.php?edit=<?=$data['id']?>" class="btn btn-sm btn-outline-primary">Edit</a>

                    <a href="?delete=<?=$data['id']?>" class="btn btn-sm btn-outline-danger">Delete</a>
                    <?php
                        if (isset($_GET['delete'])){
                            $del =  $_GET['delete'];
                            $delete_query = "DELETE FROM data WHERE id='$del'";
                            $res = mysqli_query($conn,$delete_query);
                            header("location:index.php");
                        }
                    ?>
                </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table">
        <h4>Menu Info</h4>
        <thead>
        <tr>
            <th scope="col">#</th>
            <td>Title</td>
            <td>Text</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $select_query = "SELECT * FROM menu";
        $result = mysqli_query($conn, $select_query);

        foreach ($result as $i => $data){ ?>
            <tr>
                <th scope="row"><?php echo $i + 1 ?></th>

                <td> <?php echo $data['title'] ?> </td>

                <td> <?php echo $data['text'] ?> </td>
                <td>
                    <form method="get">
                        <a href="./action/update_menu.php?edit=<?=$data['id']?>" class="btn btn-sm btn-outline-primary">Edit</a>

                        <a href="?delete=<?=$data['id']?>" class="btn btn-sm btn-outline-danger">Delete</a>
                        <?php
                        if (isset($_GET['delete'])){
                            $del =  $_GET['delete'];
                            $delete_query = "DELETE FROM menu WHERE id='$del'";
                            $res = mysqli_query($conn,$delete_query);
                            header("location:index.php");
                        }
                        ?>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>