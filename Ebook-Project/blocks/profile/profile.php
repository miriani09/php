<?php
    require_once "../../conn.php";
    $user_id = $_GET['user_id'];
    $select_query = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($conn, $select_query);

    foreach ($result as $items) {
        $id = $items['id'];
        $name = $items['name'];
        $surname = $items['surname'];
        $mail = $items['mail'];
        $phone = $items['phone'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>E-Book</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fs-3" href="profile.php?user_id=<?php echo $id ?>">Profile</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="edit_profile.php?user_id=<?php echo $id ?>">Edit profile</a>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-primary" type="submit"><a href="../index.php" style="text-decoration: none">Log Out</a></button>
            </form>
        </div>
    </div>
</nav>

<div class="container rounded bg-white" style="width: 50% !important;">
    <div class="row" >
        <div class="col-md-15 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <p class="fs-lg-3">Hello, </p>
                <img class="rounded-circle mt-1" src="../../pic/profile.jpg" width="150px" >
                <span class="font-weight-bold"><?php echo $items['name']?></span>
                <span class="text-black-50"><?php echo $items['mail']?></span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

</body>
</html>