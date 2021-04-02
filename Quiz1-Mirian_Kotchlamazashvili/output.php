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
            width: 350px;
            height: 50px;
        }
    </style>
</head>
<body>

<?php

if (isset($_POST['send'])) {
    function school()
    {
        $len_school = $_POST['school'];
        if (preg_match("/^[a-zA-Z0-9]+$/", $len_school)) {
            return $len_school;
        } else {
            return "სკოლის ველი უნდა შეიცავდეს მინ 2 სიმბოლოს და მაქს 20 სიმბოლოს";
        }

    }
    echo "<br>";

    function director()
    {
        $len_director = strlen($_POST['director']);
        if ($len_director >= 5 && $len_director <= 50) {
            return $_POST['director'];
        } else {
            return 'დირექტორის ველი უნდა შეიცავდეს მინ 5 სიმბოლოს და მაქს 50 სიმბოლოს';
        }
    }
    echo "<br>";

    function code()
    {
        $code = strlen($_POST['id_code']);
        if ($code == 9) {
            return $_POST['id_code'];
        } else {
            return 'კოდი უნდა შეიცავდეს 9 ციფრს';
        }
    }
    echo "<br>";

    function address()
    {
        $address = strlen($_POST['address']);
        if ($address <= 70) {
            return $_POST['address'];
        } else {
            return "მისამართის ველი უნდა შეიცავდეს მაქსიმალურ 70 სიმბოლოს";
        }
    }
    echo "<br>";

    function mob()
    {
        $mob1 = $_POST['mob'];
        if (!empty($mob1)) {
            return $_POST['mob'];
        } else {
            return "ტელეფონის ველი არ უნდა იყოს ცარიელი";
        }
    }

    echo "<br>";

}
?>
<table>
    <tr>
        <td>სკოლის სახელი</td>
        <td>
            <?php
                echo school();
            ?>
        </td>

    </tr>
    <tr>
        <td>სკოლის დირექტორის სახელი,გვარი</td>
        <td>
            <?php
                echo director();
            ?>
        </td>
    </tr>
    <tr>
        <td>სკოლის დაარსების თარიღი</td>
        <td>
            <?php
            echo $_POST['select'];;
            ?>
        </td>
    </tr>
    <tr>
        <td>საიდენტიფიკაციო კოდი</td>
        <td>
            <?php
            echo code();
            ?>
        </td>
    </tr>
    <tr>
        <td>მისამართი</td>
        <td>
            <?php
            echo address();
            ?>
        </td>
    </tr>
    <tr>
        <td>რეგისტრაციის თარიღი</td>
        <td>
            <?php
            echo $_POST['reg'];
            ?>
        </td>
    </tr>
    <tr>
        <td>საკონტაქტო ტელეფონი</td>
        <td>
            <?php
            echo mob();
            ?>
        </td>
    </tr>
    <tr>
        <td>დამატებითი ინფორმაცია</td>
        <td>
            <?php
                echo $_POST['info']
            ?>
        </td>
    </tr>

</table>
</body>
</html>
