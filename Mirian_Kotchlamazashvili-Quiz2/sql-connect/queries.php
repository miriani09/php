<?php
require_once "conn.php";

//RAND STRINGS FOR CODE
function rand_string($length = 11) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//INSERT TO BASE BOOK:
if (isset($_GET['submit'])){
    $title = $_GET['title'];
    $pages= rand(50, 1000);
    $price = $pages * 0.20;
    $code = rand_string();
    $author = $_GET['author'];

    if (strlen($title) >= 2 && strlen($title) <= 100 && strlen($author) >= 5 && strlen($author) <=50){
        $insert = "INSERT INTO info(title, pages, price, code, author)
                VALUES ('$title', '$pages', '$price', '$code', '$author')";
        if (mysqli_query($conn, $insert)){
            header("location:index.php");
        }
    }else{
        echo '<script>alert("Enter Title From 2 Up To 100 Symbol and Author from 5 to 50")</script>';
    }
}

//DELETE BOOK FROM BASE:
if (isset($_GET['delete'])){
    $del = $_GET['delete'];
    $delete_food = "DELETE FROM info WHERE id = '$del'";
    if (mysqli_query($conn, $delete_food)){
        header("location:index.php");
    }
}



