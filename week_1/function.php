<!doctype html>
<html lang="en">
<head>
    <title>Function</title>
</head>
<body>
    <?php
        function f1(){
            echo "<h1> Function </h1>";
        };
        function f2($name, $lastname){
            echo "<h1> Hello $name $lastname </h1>";
        };
        function f3(){
            return " Function ";
        };
        function f4($x, $y, $z){
            return $x+$y+$z;
        };

        f1();

        f2("Mirian", "Kotchlamazashvili");

    f4(1, 3, 4);

        function f5($n){
            if($n == 1){
                return 1;
                }
                return $n*f5($n-1);
            };
        echo f5(5);
        ?>

</body>
</html>