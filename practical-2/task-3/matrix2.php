<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td{
            border: solid 1px black;
            width: 500px;
            height: 100px;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $matrix = [

            ];
        for ($i = 0; $i <= 6; $i++){
            for ($j = 0; $j <= 5; $j++){
                $matrix[$i][$j] = $i + $j;
            }
        }

    ?>

    <table>
        <tr>
            <td>
                <?php
                echo $matrix[0][0];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[0][1];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[0][2];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[0][3];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[0][4];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $matrix[1][0];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[1][1];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[1][2];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[1][3];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[1][4];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $matrix[2][0];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[2][1];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[2][2];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[2][3];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[2][4];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $matrix[3][0];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[3][1];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[3][2];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[3][3];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[3][4];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $matrix[4][0];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[4][1];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[4][2];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[4][3];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[4][4];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $matrix[5][0];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[5][1];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[5][2];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[5][3];
                ?>
            </td>
            <td>
                <?php
                echo $matrix[5][4];
                ?>
            </td>
        </tr>
    </table>
</body>
</html>