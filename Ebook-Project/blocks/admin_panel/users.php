<?php
require_once "../../conn.php";


if (isset($_GET['user'])) {
    $del = $_GET['user'];
    $user = $_GET['user'];
    $del_query = "DELETE FROM users WHERE id = '$user'";
    if (mysqli_query($conn, $del_query)) {
        header("location:users.php?users=");
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
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>
<?php
include "admin_page.php";
?>
<br>

<table class="table w-100 p-3">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Mail</th>
        <th scope="col">Phone</th>
        <th></th>
    </tr>
    </thead>
    <?php
    if (isset($_GET['users'])){

    $select_query = "SELECT * FROM users";
    $result = mysqli_query($conn, $select_query);

    foreach ($result as $i => $items){
    ?>
    <tbody>
    <tr>
        <th scope="row"><?php echo $i + 1 ?></th>
        <td><?php echo $items['name'] ?></td>
        <td><?php echo $items['surname'] ?></td>
        <td><?php echo $items['mail'] ?></td>
        <td><?php echo $items['phone'] ?></td>
        <td>
            <a href="edit_profile.php?user=<?= $items['id'] ?>" type="button" class="btn btn-success">Edit</a>

            <a href="users.php?user=<?= $items['id'] ?>" type="button" class="btn btn-danger">Delete</a>
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