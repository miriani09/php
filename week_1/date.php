<!doctype html>
<html lang="en">
<head>
    <title>Date</title>
</head>
<body>
    <?php
        date_default_timezone_set("Asia/Tbilisi");
        $t = date("Y/m/d - H:i:s");
        echo $t;
    ?>
</body>
</html>