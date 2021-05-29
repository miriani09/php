<?php
    require_once "../sql-connect/conn.php";
    if (isset($_GET['submit'])) {
        $mail = $_GET['mail'];
        $password = $_GET['password'];

        $insert = "INSERT INTO login(mail, password)
                    VALUES ('$mail', '$password')";

        if (mysqli_query($conn, $insert)) {
        } else {
            echo "error: " . $insert . "<br>" . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>E-Book</title>
</head>
<body style="background-color: rgb(32, 39, 46) !important;">
<?php
    include "header.php";
?>
<div style="height: 65px; position: relative;"></div>
<!--log-in-->
<h4 style="color: white;text-align: center;margin-top: 20px;" class="lang" key="auth">ავტორიზაცია</h4><hr style="background-color: white; margin-top: 20px;">
<form method="get" class="">
    <div class="form-group">
        <input type="email" name="mail" class="form-control lang_placeholder" key="mail" style="box-shadow: none;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ელ.ფოსტა"><br>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control lang_placeholder" key="password" style="box-shadow: none;" id="exampleInputPassword1" placeholder="პაროლი"><br>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" style="box-shadow: none;" id="exampleCheck1"><p class="lang" key="save" style="overflow-y: hidden;">დამახსოვრება</p>
    </div>
    <button type="submit" name="submit" class="btn btn-primary lang" key="submit" style="box-shadow: none;">შესვლა</button>
</form>

<script src="../reg.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>