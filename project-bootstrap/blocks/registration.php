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
    include "header.php";
?>
<div style="height: 70px; position: relative;"></div>

<!--Registration Form-->
<form>
    <h4 style="color: white;text-align: center;margin-top: 20px;" class="lang" key="reg">რეგისტრაცია</h4><hr style="background-color: white; margin-top: 20px;">
    <div class="form-group">
        <input  class="form-control lang_placeholder" key="name" style="box-shadow: none;" id="name" onkeyup="name_check()" placeholder="სახელი"><br>
    </div>
    <div class="form-group">
        <input  class="form-control lang_placeholder" key="surname" style="box-shadow: none;" id="surname" onkeyup="surname_check()" placeholder="გვარი"><br>
    </div>
    <div class="form-group">
        <div >
            <input type="password" class="form-control lang_placeholder" key="password" style="box-shadow: none;" id="pwd"  onkeyup="validatePassword(this.value);" placeholder="პაროლი">
        </div>
        <p  id="msg" style="float: left;font-size: 10px;"></p>

        <br>
    </div>
    <div class="form-group">
        <input type="password" class="form-control lang_placeholder" key="re_password" style="box-shadow: none;" id="pwd2" placeholder="გაიმეორეთ პაროლი">
        <input type="checkbox" onclick="password_show()" ><label style="font-size: 10px; margin-left: 10px;" class="lang" key="show_psw">პაროლის ჩვენება</label>
    </div><br>
    <div class="form-group">
        <input type="mail" class="form-control" style="box-shadow: none;" id="mail" onkeyup="mail_check()"  placeholder="example@email.com"><br>
    </div>
    <div class="form-group">
        <input type="phone" class="form-control lang_placeholder" key="phone" style="box-shadow: none;" id="phone" onkeyup="phone_check()" placeholder="მობ.ნომერი - 512 345 678"><br>
    </div>
    <button type="button" id="button" class="btn btn-primary lang" key="submit" onclick="done()" style="box-shadow: none;">შესვლა</button>
</form>


<script src="../reg.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>
