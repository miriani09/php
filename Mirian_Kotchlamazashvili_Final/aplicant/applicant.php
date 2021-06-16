<?php
require_once "../sql-conn/conn.php";
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
    <title>CV</title>
</head>
<body>
<h1 style="text-align: center"><a href="applicant.php" class="link">Applicant Page</a></h1>
<hr>

<form method="get" style="margin-left: 30px">

    <a href="add_cv.php" type="button" class="btn btn-secondary">Add CV</a>
    <a href="list_cv.php" type="button" class="btn btn-secondary">List CV</a>
    <a href="../index.php" type="button" class="btn btn-secondary" style="margin-left: 1140px">Log Out</a>
</form>

</body>
</html>