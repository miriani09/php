<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-size: 25px;
        }
        table, tr, td{
            border: solid 1px black;
            width: 500px;
            height: 100px;
            border-collapse: collapse;
        }
        td{
            text-align: center;
        }
        input{
            width: 200px;
            height: 44px;
            margin-top: 20px;
        }
        button{
            width: 100px;
            height: 50px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
        $matrix1 = [
            [33,12,50,65],
            [23,51,20,56],
            [15,34,29,78],
            [32,55,75,94]
        ];
    ?>
    <table>
        <tr>
            <td>
                <?php
                print_r($matrix1[0][0]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[0][1]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[0][2]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[0][3]);
                ?>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <?php
                    print_r($matrix1[1][0]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[1][1]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[1][2]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[1][3]);
                ?>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <?php
                print_r($matrix1[2][0]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[2][1]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[2][2]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[2][3]);
                ?>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <?php
                print_r($matrix1[3][0]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[3][1]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[3][2]);
                ?>
            </td>
            <td>
                <?php
                print_r($matrix1[3][3]);
                ?>
            </td>
        </tr>
    </table>
    <hr>
    <form method="post">
        <label for="">Enter Number: </label>
        <input type="number" name="number" >
        <button>Submit</button>
    </form>
    <hr>
    <?php
    echo $_POST["number"], "-is jeradi rixvebi ";
    foreach ($matrix1 as $item) {
        if (is_array($item)) {
            foreach ($item as $v) {
                if($v % $_POST["number"] == 0){
                    echo ", $v ";
                }
            }
        }
    }
    ?>

    <hr>

    <?php
    echo "matricis elementebis jami: ";
    $count = 0;
    foreach ($matrix1 as $item) {
        if (is_array($item)) {
            foreach ($item as $v) {
                $count += $v;
            }
        }
    }
    echo $count;
    ?>

    <hr>

    <?php
    echo "matricis elementebis namravli: ";
    $count = 1;
    foreach ($matrix1 as $item) {
        if (is_array($item)) {
            foreach ($item as $v) {
                $count *= $v;
            }
        }
    }
    echo $count;
    ?>

    <hr>

    <?php
    echo "matricis elementebis sashualo aritmetikuli: ";
    $count = 0;
    foreach ($matrix1 as $item) {
        if (is_array($item)) {
            foreach ($item as $v) {
                $count += $v;
            }
        }
    }
    echo $count / 16;
    ?>
</body>
</html>
