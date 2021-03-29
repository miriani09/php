<!doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td{
            width: 500px;
            height: 50px;
            border: solid 1px black;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="">enter table row: </label><input type="number" name="row" id="">
        <br><br>
        <label for="">enter table column: </label><input type="number" name="col" id="">
        <br><br>
        <label for="">enter num1: </label><input type="number" name="num1" id="">
        <br><br>
        <label for="">enter num2: </label><input type="number" name="num2" id="">
        <br><br>
        <button name="send_post">Submit</button>
        <br><br>
    </form>

    <?php
        if(isset($_POST["send_post"]) && !empty($_POST["num1"] && !empty($_POST["num2"])&& !empty($_POST["row"])&& !empty($_POST["col"]))){
    ?>
            <?php
            function table1(){
                $table = "<table>";
                for ($row = 0; $row <= $_POST["row"]; $row++) {
                    $table .= "<tr> \n";
                    for ($col = 0; $col <= $_POST["col"]; $col++) {
                        $p = rand($_POST["num1"],$_POST["num2"]);
                        $table .= "<td>$p</td> \n";
                    }
                    $table .= "</tr>";
                }
                $table .= "</table>";
                return $table;
            }
            echo table1();
            ?>
    <?php
        }
    ?>
</body>
</html>