<?php
if(isset($_POST['user'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $products = $_POST['products'];
    $person = [$user, $pass, $products[0]];
    $person = json_encode($person);
    echo $person;
}