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
        table,tr,th,td{
            border: solid 1px black;
            border-collapse: collapse;
            width: 200px;
            height: 25px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
$user_error = "";
$old_user = "";
$old_surname = "";
$old_website = "";
$old_gender = "";
$data_bool = false;
if(isset($_POST['send_user'])){
    $old_user = $_POST['user'];
    $old_surname = $_POST['surname'];
    $old_website = $_POST['website'];
    if(empty($_POST['user']) && empty($_POST['surname']) && empty($_POST['website']) && empty($_POST['gen'])){
        $user_error = "user field is empty";
    }else{
        $data_bool = true;
    }
}
?>

<form method="post">
    <h1>PHP Form Validation Example</h1>
    <h3 style="color: red">
        <?php
        echo $user_error;
        ?>
    </h3>
    <label for="">Name: </label><input type="text" name="user" value="<?=$old_user?>"><label for="" style="color: red;">*</label>
    <br>
    <label for="">Surname: </label><input type="text" name="surname" value="<?=$old_surname?>"><label for="" style="color: #ff0000;">*</label>
    <br>
    <label for="">Website: </label><input type="text" name="website" value="<?=$old_website?>">
    <br>
    <label for="">Comment: </label><textarea name="comment" id="" cols="30" rows="5"></textarea>

    <br>

    <label for="">Gender: </label>
    <input type="radio" name="gen" value="Female"><label for="">Female</label>
    <input type="radio" name="gen" value="Male"><label for="">Male</label>
    <input type="radio" name="gen" value="Other"><label for="">Other</label>
    <label for="" style="color: red;">*</label>

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
                    <th>Name: </th>
                    <td><?=$old_user?></td>
                </tr>
                <tr>
                    <th>Surname: </th>
                    <td><?=$old_surname?></td>
                </tr>
                <tr>
                    <th>Website: </th>
                    <td><?=$old_website?></td>
                </tr>
                <tr>
                    <th>Comment: </th>
                    <td>
                        <?php
                            echo $_POST["comment"]
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Gender: </th>
                    <td>
                        <?php
                        if (isset($_POST["gen"])){
                            if($_POST["gen"] == "Female"){
                                echo "Female";
                            }elseif ($_POST["gen"] == "Male"){
                                echo "Male";
                            }elseif ($_POST["gen"] == "Other"){
                                echo "Other";
                            }
                        }
                        if (empty($_POST["gen"])){
                            echo "choose gender";
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <?php
        }
        ?>
    </div>
</form>


</body>
</html>