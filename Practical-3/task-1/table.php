<!doctype html>
<html lang="en">
<head>
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
<?php
function table1(){
    $table = "<table>";
    for ($row = 1; $row <= 10; $row++) {
        $table .= "<tr> \n";
        for ($col = 1; $col <= 10; $col++) {
            $p = rand(10,99);
            $table .= "<td>$p</td> \n";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}
echo table1();
?>

</body>
</html>