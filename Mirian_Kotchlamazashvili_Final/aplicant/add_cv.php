<?php
require_once "../sql-conn/conn.php";

if (isset($_GET['submit'])){
    $phone = $_GET['phone'];
    $education = $_GET['education'];
    $work_exp = $_GET['work_exp'];

    if (!empty($phone) && strlen($phone) == 9 && !empty($education) && !empty($work_exp)){
        $insert = "INSERT INTO aplicant(phone, education, work_exp)
                VALUES ('$phone','$education', '$work_exp')";
        if (mysqli_query($conn, $insert)){
            header("location:applicant.php");
        }
    }else{
        echo '<script>alert("info must be entered or phone must be contain 9 symbol")</script>';
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
    <title>CV</title>
</head>
<body>
<h1 style="text-align: center"><a href="applicant.php" class="link">Add Cv</a></h1>
<hr>

<form method="get" class="form1" style="width: 400px; margin-left: 30px">
    <input class="form-control" name="phone" type="number" placeholder="Phone">
    <br>
    <textarea class="form-control" name="education" type="text" placeholder="Education"></textarea>
    <br>
    <textarea class="form-control" name="work_exp" type="text" placeholder="Work Experience"></textarea>
    <br>
    <button name="submit" class="btn btn-primary">Submit</button>
    <button name="cancel" class="btn btn-danger"><a href="../administrator/administrator.php" style="text-decoration: none;color: white">Cancel</a></button>
</form>

</body>
</html>