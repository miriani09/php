<?php
require_once "../conn.php";

if(isset($_POST['submit'])) {

    if (preg_match("/\S+/", $_POST['name']) === 0) {
        //echo "<script>document.getElement('d').innerHTML = 'asdqwe'</script>";
    }
    elseif (preg_match("/\S+/", $_POST['surname']) === 0) {
        //echo "<script>alert('Surname required')</script>";
    }
    elseif (preg_match("/.{8,}/", $_POST['password']) === 0) {
        //echo "<script>alert('Password must be contain 8 symbol')</script>";
    }
    elseif (strcmp($_POST['password'], $_POST['re_password'])) {
        //echo "<script>alert('Passwords not matches')</script>";
    }
    elseif (preg_match("/.{9,}/", $_POST['phone']) === 0) {
        //echo "<script>alert('Phone must be contain georgian format')</script>";
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
            $sql = "INSERT INTO users(`name`, `surname`, `password`, `mail`, `phone`) VALUES ('$name', '$surname', '$password', '$mail', '$phone')";
            $query = mysqli_query($conn, $sql);

            echo "<script>alert('You are successfully registered')</script>";
            header('location:log-in.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>E-Book</title>
</head>
<body style="background-color:rgb(32, 39, 46) !important;">
<?php
require_once "header.php";
?>
<div style="height: 70px; position: relative;"></div>

<!--Registration Form-->
<form method="post" action="registration.php">
    <h4 style="color: white;text-align: center;margin-top: 20px;">რეგისტრაცია</h4><hr style="background-color: white; margin-top: 20px;">
    <div class="form-group">
        <input class="form-control " name="name" id="name" style="box-shadow: none;" onkeyup="name_check()" placeholder="სახელი"><br>
    </div>
    <div class="form-group">
        <input  class="form-control " name="surname" style="box-shadow: none;" id="surname" onkeyup="surname_check()" placeholder="გვარი"><br>
    </div>
    <div class="form-group">
        <div >
            <input type="password" class="form-control " name="password" style="box-shadow: none;" id="pwd"  onkeyup="validatePassword(this.value);" placeholder="პაროლი">
        </div>
        <p  id="msg" style="float: left;font-size: 10px;"></p>

        <br>
    </div>
    <div class="form-group">
        <input type="password" class="form-control " name="re_password" style="box-shadow: none;" id="pwd2" placeholder="გაიმეორეთ პაროლი">
        <input type="checkbox" onclick="password_show()" ><label style="font-size: 10px; margin-left: 10px;" >პაროლის ჩვენება</label>
    </div><br>
    <div class="form-group">
        <input type="email" class="form-control " style="box-shadow: none;" name="mail" id="mail" onkeyup="mail_check()"  placeholder="example@email.com"><br>
    </div>
    <div class="form-group">
        <input type="text" class="form-control " name="phone" style="box-shadow: none;" id="phone" onkeyup="phone_check()" placeholder="მობ.ნომერი - 512 345 678"><br>
    </div>
    <button id="button" class="btn btn-primary " name="submit" onclick="done()" style="box-shadow: none;">შესვლა</button>
</form>


<script src="./js/reg.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>