<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 500px;
            min-height: 300px;
            border: solid 1px black;
            padding: 20px;
        }
        label,input{
            margin: 10px;
        }
        button{
            width: 100px;
            height: 30px;
        }
    </style>
</head>
<body>
        <?php
            $user_error = "";
            $old_user = "";
            $old_surname = "";
            $data_bool = false;
            if(isset($_POST['send_user'])){
                $old_user = $_POST['user'];
                $old_surname = $_POST['surname'];
                if(empty($_POST['user']) && empty($_POST['surname'])){
                    $user_error = "user field is empty";
                }else{
                    $data_bool = true;
                }
            }
        ?>

    <form method="post">
        <h1>PHP Form Validation Example</h1>
        <label for="">Name: </label><input type="text" name="user" value="<?=$old_user?>"><label for="" style="color: red;">*</label>
        <br>
        <label for="">Surname: </label><input type="text" name="surname" value="<?=$old_user?>"><label for="" style="color: red;">*</label>
        <br>
        <label for="">Website: </label><input type="text">
        <br>
        <label for="">Comment: </label><textarea name="" id="" cols="30" rows="5"></textarea>
        <br>
        <label for="">Gender: </label>
        <input type="radio" name="gen"><label for="">Female</label>
        <input type="radio" name="gen"><label for="">Male</label>
        <input type="radio" name="gen"><label for="">Other</label><label for="" style="color: red;">*</label>
        <br>
        <button name="send_user">Submit</button>
        <br>
        <hr>
        <h1>Your Input</h1>
        <div>
            <?php
                if($data_bool){
            ?>
            <table class="">
                <tr>
                    <td>Name: </td>
                    <td><?=$old_user?></td>
                </tr>
                <tr>
                    <td>Sur Name: </td>
                    <td><?=$old_user?></td>
                </tr>
            </table>
            <?php
                }
            ?>
        </div>
    </form>


</body>
</html>