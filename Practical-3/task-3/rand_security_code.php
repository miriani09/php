<!doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .div1{
        width: 200px;
        height: 50px;
        font-size: 40px;
        text-align: center;
        border-radius: 10px;
    }
    input{
        border: solid 1px black;
        width: 199px;
        height: 50px;
        border-radius: 10px;
        margin-top: 20px;
        font-size: 20px;
        text-align: center;
    }
    button{
        width: 100px;
        height: 50px;
        border-radius: 10px;
        margin-left: 40px;
    }
</style>
<body>


    <div class="div1">
        <?php
            $save = rand(10, 100);
            if (isset($_POST['send'])){

                if ($_POST['input_code'] != $_POST['security_code']){
                    echo "Incorrect";
                }
                else {
                    echo " Correct ";
                }
            }
        ?>
    </div>
    <form method="post">
        <br>
        <input value="<?=$save?>" name="security_code">
        <br><br>
        <input type="number" name="input_code" placeholder="enter security code">
        <br><br>
        <button name="send">Submit</button>
        <br>

    </form>


</body>
</html>