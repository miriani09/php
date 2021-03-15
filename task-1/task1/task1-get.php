<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            margin: auto;
            border: solid 1px black;
            width: 300px;
            height: 100px;
            font-size: 40px;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <td>
                <?php
                    echo $_GET['name'];
                ?>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <?php
                    echo $_GET['surname'];
                ?>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <?php
                    echo $_GET['position'];
                ?>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <?php
                    echo $_GET['salary'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo $_GET['salary']/100*20;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo $_GET['salary']-$_GET['salary']/100*20;
                ?>
            </td>
        </tr>
    </table>

</body>
</html>