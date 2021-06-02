<?php
require_once "../../conn.php";


$user_id = $_GET['user'];
$select_query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $select_query);

foreach ($result as $items) {
    $name = $items['name'];
    $surname = $items['surname'];
    $mail = $items['mail'];
    $phone = $items['phone'];
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];

    if (preg_match("/\S+/", $_POST['name']) === 0) {
        echo "<script>alert('name required')</script>";
    }
    elseif (preg_match("/\S+/", $_POST['surname']) === 0) {
        echo "<script>alert('Surname required')</script>";
    }
    elseif (preg_match("/.{8,}/", $_POST['password']) === 0) {
        echo "<script>alert('Password must be contain 8 symbol')</script>";
    }
    elseif (strcmp($_POST['password'], $_POST['re_password'])) {
        echo "<script>alert('Passwords not matches')</script>";
    }
    elseif (preg_match("/.{9,}/", $_POST['phone']) === 0) {
        echo "<script>alert('Phone must be contain georgian format')</script>";
    }else{
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $mail = mysqli_real_escape_string($conn, $_POST['mail']);

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        $search_query = mysqli_query($conn, "SELECT * FROM users WHERE mail = '$mail'");
        $num_row = mysqli_num_rows($search_query);
        if ($num_row >= 1) {
            echo "<script>alert('Mail already registered')</script>";
        } else {
            $edit_query = "UPDATE users SET name='$name',surname='$surname',password='$password',mail='$mail', phone='$phone' WHERE id = '$user_id'";

            $query = mysqli_query($conn, $edit_query);

            echo "<script>alert('Profile edited')</script>";
        }
    }
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
<?php
    require_once "admin_page.php";
?>
<form method="post">
<div class="container rounded bg-white mt-5 mb-4" >
    <div class="row" >
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="../../pic/profile.jpg" width="150px" ><span class="font-weight-bold"><?php echo $items['name']?></span><span class="text-black-50"><?php echo $items['mail']?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5" >
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="first name" value="<?php echo $name ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="surname" class="form-control" value="<?php echo $surname ?>" placeholder="surname"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Password</label><input type="text" name="password" class="form-control" placeholder="Password" value=""></div>
                    <div class="col-md-6"><label class="labels">Re-Password</label><input type="text" name="re_password" class="form-control" value="" placeholder="Re-password"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">E-Mail</label><input type="text" name="mail" class="form-control" placeholder="enter e-mail" value="<?php echo $mail ?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone" class="form-control" placeholder="enter phone number" value="<?php echo $phone ?>"></div>
                </div>
                <div class="mt-5 text-center col-md-1"><button class="btn btn-primary" name="submit">Save</button></div>
            </div>
        </div>
    </div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

</body>
</html>