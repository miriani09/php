<?php
require_once "../sql-conn/conn.php";

$edit = $_GET['edit'];
$select_query = "SELECT * FROM aplicant WHERE id = '$edit'";
$result = mysqli_query($conn, $select_query);

foreach ($result as $items) {
    $phone = $items['phone'];
    $education = $items['education'];
    $work_exp = $items['work_exp'];
}

if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];

    $phone = $_POST['phone'];
    $education= $_POST['education'];
    $work_exp = $_POST['work_exp'];

    if (!empty($phone) && strlen($phone) == 9 && !empty($education) && !empty($work_exp)) {
        $edit_query = "UPDATE aplicant SET phone='$phone',education='$education',work_exp='$work_exp' WHERE id = '$edit'";
        if (mysqli_query($conn, $edit_query)) {
            header("location:list_cv.php");
        }
    } else {
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
    <h1 style="text-align: center"><a href="applicant.php" class="link">Edit CV</a></h1>
    <hr>
    <form method="post" class="form1" style="width: 400px">
        <input class="form-control" name="phone" value="<?php echo $phone?>" type="number" placeholder="Enter Title" >
        <br>
        <textarea class="form-control" name="education" type="text" placeholder="Work Experience"><?php echo $education?></textarea>
        <br>
        <textarea class="form-control" name="work_exp" type="text" placeholder="Work Experience"><?php echo $work_exp?></textarea>
        <br>
        <button name="submit" class="btn btn-primary">Submit</button>
        <button name="cancel" class="btn btn-danger"><a href="applicant.php" style="text-decoration: none;color: white">Cancel</a></button>
    </form>
</body>
</html>