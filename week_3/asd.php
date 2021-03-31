<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="post">
    <input  name="a" id="">
    <br>
    <button name="send">Submit</button>
    <?php
    $already_selected_value = 1984;
    $earliest_year = 1950;

    print '<select name="some_field">';
    foreach (range(date('Y'), $earliest_year) as $x) {
        print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
    }
    print '</select>';
    ?>
</form>
</body>
</html>