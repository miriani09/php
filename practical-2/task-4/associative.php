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
            text-align: left;
        }
        th,td{
            width: 150px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $cars = array(
            array(
                "Make"=>"Toyota",
                "Model"=>"Corolla",
                "Color"=>"White",
                "Mileage"=>24000,
                "Status"=>"Sold"
            ),
            array(
                "Make"=>"Toyota",
                "Model"=>"Camry",
                "Color"=>"Black",
                "Mileage"=>56000,
                "Status"=>"Available"
            ),
            array(
                "Make"=>"Honda",
                "Model"=>"Accord",
                "Color"=>"White",
                "Mileage"=>15000,
                "Status"=>"Sold"
            ),
        );
    ?>
    <table>
        <tr>
            <th>
                N
            </th>
            <th>
                Make
            </th>
            <th>
                Model
            </th>
            <th>
                Color
            </th>
            <th>
                Mileage
            </th>
            <th>
                Status
            </th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <?php
                    echo $cars[0]["Make"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[0]["Model"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[0]["Color"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[0]["Mileage"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[0]["Status"]
                ?>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>
                <?php
                echo $cars[1]["Make"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[1]["Model"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[1]["Color"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[1]["Mileage"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[1]["Status"]
                ?>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>
                <?php
                echo $cars[2]["Make"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[2]["Model"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[2]["Color"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[2]["Mileage"]
                ?>
            </td>
            <td>
                <?php
                echo $cars[2]["Status"]
                ?>
            </td>
        </tr>
    </table>
</body>
</html>