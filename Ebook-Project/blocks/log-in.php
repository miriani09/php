<?php
require_once "../conn.php";

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    //$password_check = mysqli_query($conn, "SELECT password FROM registration");
//    foreach ($result as $item){
//        if ($mail == $item['mail']){
//            $verify = password_verify($password, $item['password']);
//            if ($verify){
//                header('location:./profile/profile.php');
//            }else{
//                echo "<script>alert('Invalid mail or password')</script>";
//            }
//        }
//    }

    $sql_query = "select id,mail,password from users where mail = '$mail'";
    $result = mysqli_query($conn, $sql_query);

    if(mysqli_num_rows($result) > 0 ){

        $row = mysqli_fetch_assoc($result);

        $user_id =  $row['id'];
        $user_mail = $row['mail'];
        $user_pass = $row['password'];
            if (password_verify($password, $user_pass)){
                header('location:./profile/profile.php?user_id='.$user_id);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>E-Book</title>

</head>
<body style="background-color: rgb(32, 39, 46) !important;">
<?php
require_once "header.php";
?>
<div style="height: 65px; position: relative;"></div>
<!--log-in-->
<h4 style="color: white;text-align: center;margin-top: 20px;" class="lang" key="auth">შესვლა</h4>
<hr style="background-color: white; margin-top: 20px;">
<form method="post" class="">
    <div class="form-group">
        <input type="email" name="mail" class="form-control lang_placeholder" key="mail" style="box-shadow: none;"
               id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ელ.ფოსტა"><br>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control lang_placeholder" key="password"
               style="box-shadow: none;" id="exampleInputPassword1" placeholder="პაროლი"><br>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" style="box-shadow: none;" id="exampleCheck1">
        <p class="lang" key="save" style="overflow-y: hidden;">დამახსოვრება</p>
    </div>
    <button name="submit" class="btn btn-primary lang">შესვლა</button>
</form>

<script src="js/reg.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>