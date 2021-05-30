<?php
    include "../sql-connect/conn.php";

    if (isset($_GET['submit'])) {
        $name = $_GET['name'];
        $surname = $_GET['surname'];
        $password = $_GET['password'];
        $mail = $_GET['mail'];
        $phone = $_GET['phone'];

        $select = "SELECT mail FROM registration";
        $result = mysqli_query($conn, $select);
        foreach ($result as $item) {
            if ($mail != $item['mail']) {
                $insert = "INSERT INTO registration(name, surname, password, mail, phone)
                    VALUES ('$name', '$surname', '$password', '$mail', '$phone')";
                if (mysqli_query($conn, $insert)) {
                    echo "<script>alert('თქვენ წარმატებით დარეგისტრირდით.')</script>";
                    header("location:registration.php");
                } else {
                    echo "error: " . $insert . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "<script>alert('ეს მეილი უკვე გამოყენებულია.')</script>";
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
<form method="get">
    <h4 style="color: white;text-align: center;margin-top: 20px;">რეგისტრაცია</h4><hr style="background-color: white; margin-top: 20px;">
    <div class="form-group">
        <input  class="form-control lang_placeholder" name="name" style="box-shadow: none;" id="name" onkeyup="name_check()" placeholder="სახელი"><br>
    </div>
    <div class="form-group">
        <input  class="form-control lang_placeholder" name="surname" style="box-shadow: none;" id="surname" onkeyup="surname_check()" placeholder="გვარი"><br>
    </div>
    <div class="form-group">
        <div >
            <input type="password" class="form-control lang_placeholder" name="password" style="box-shadow: none;" id="pwd"  onkeyup="validatePassword(this.value);" placeholder="პაროლი">
        </div>
        <p  id="msg" style="float: left;font-size: 10px;"></p>

        <br>
    </div>
    <div class="form-group">
        <input type="password" class="form-control lang_placeholder" name="re_password" style="box-shadow: none;" id="pwd2" placeholder="გაიმეორეთ პაროლი">
        <input type="checkbox" onclick="password_show()" ><label style="font-size: 10px; margin-left: 10px;" class="lang" key="show_psw">პაროლის ჩვენება</label>
    </div><br>
    <div class="form-group">
        <input type="text" class="form-control" style="box-shadow: none;" name="mail" id="mail" onkeyup="mail_check()"  placeholder="example@email.com"><br>
    </div>
    <div class="form-group">
        <input type="text" class="form-control lang_placeholder" name="phone" style="box-shadow: none;" id="phone" onkeyup="phone_check()" placeholder="მობ.ნომერი - 512 345 678"><br>
    </div>
    <button id="button" class="btn btn-primary lang" name="submit" onclick="done()" style="box-shadow: none;">შესვლა</button>
</form>


<script src="./Js/reg.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>
