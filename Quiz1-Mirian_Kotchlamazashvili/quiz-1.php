<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: solid 1px black;
            border-collapse: collapse;
        }
        button{
            margin-top: 5px;
            width: 100px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="output.php" method="post">
        <table>
            <tr>
                <th>ველი,ფორმის ელემენტები</th>
                <th>ვერიფიკაცია</th>
            </tr>
            <tr>
                <td>სკოლის სახელი</td>
                <td><input type="text" name="school"></td>
            </tr>
            <tr>
                <td>სკოლის დირექტორის სახელი,გვარი</td>
                <td><input type="text" name="director"></td>
            </tr>
            <tr>
                <td>სკოლის დაარსების თარიღი</td>
                <td><select name="select">
                        <?php
                        for($i = 1800 ; $i < date('Y'); $i++){
                            echo "<option>$i</option>";
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>საიდენტიფიკაციო კოდი</td>
                <td><input type="number" name="id_code"></td>
            </tr>
            <tr>
                <td>მისამართი</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>რეგისტრაციის თარიღი</td>
                <td><input type="number" name="reg"></td>
            </tr>
            <tr>
                <td>საკონტაქტო ტელეფონი</td>
                <td><input type="number" name="mob"></td>
            </tr>
            <tr>
                <td>დამატებითი ინფორმაცია</td>
                <td><input type="text" name="info"></td>
            </tr>
        </table>
        <br>
        <button name="send">Submit</button>
    </form>


</body>
</html>