<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 208px;
            margin: auto;
        }
        input{
            width: 200px;
            font-size: 20px;
            margin: 10px;
        }
        button{
            margin: 10px;
            width: 80px;
            height: 30px;
            background-color: grey;
            color: white;
        }
        button:hover{
            background-color: darkgray;
        }
        table,tr,td{
            margin: auto;
            border: solid 1px black;
            width: 300px;
            height: 50px;
            font-size: 20px;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="სტუდეტის სახელი" name="name">
        <br>
        <input type="text" placeholder="სტუდენტის გვარი" name="surname">
        <br>
        <input type="text" placeholder="კურსი" name="course">
        <br>
        <input type="number" placeholder="სემესტრი" name="semester">
        <br>
        <input type="number" placeholder="ნიშანი" name="point">
        <br>
        <button name="send">Submit</button>
    </form>

    <?php
        if(isset($_POST['send']) && !empty($_POST['name']) && !empty($_POST['surname'])&& !empty($_POST['course'])
         && !empty($_POST['semester'])&& !empty($_POST['point'])){
    ?>
    <table>
        <tr>
            <td>სტუდენტის სახელი</td>
            <td>სტუდენტის გვარი</td>
            <td>კურსი</td>
            <td>სემესტრი</td>
            <td>ნიშანი</td>
            <td>შეფასება</td>
        </tr>
        <tr>
            <td>
                <?php
                    echo $_POST['name']
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['surname']
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['course']
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['semester']
                ?>
            </td>
            <td>
                <?php
                if($_POST['point'] >=0 && $_POST['point'] <= 100){
                    echo $_POST['point'];
                }else{echo "შეფასების სისტემა არის 100 ქულიანი";;}
                ?>
            </td>
            <td>
                <?php
                    if($_POST['point'] >=80 && $_POST['point'] <= 100){
                        echo "ფრიადი";
                }elseif($_POST['point'] >=51 && $_POST['point'] <= 79){
                        echo "საშუალო";
                }else{echo "ცუდი";}
                ?>
            </td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>