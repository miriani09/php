<?php
require_once "conn.php";

//INSERT TO BASE RECIPE:
if (isset($_GET['submit'])){
    $title = $_GET['title'];
    $description= $_GET['description'];

    if (strlen($title) >= 10 && strlen($title) <= 50){
        $insert = "INSERT INTO foods(title, description)
                VALUES ('$title', '$description')";
        if (mysqli_query($conn, $insert)){
            header("location:index.php");
        }
    }else{
        echo '<script>alert("Enter Title From 10 Up To 50 Symbol")</script>';
    }
}

//DELETE RECIPE FROM BASE:
if (isset($_GET['delete'])){
    $del = $_GET['delete'];
    $delete_comm = "DELETE FROM comment WHERE food_id = '$del'";
    $delete_food = "DELETE FROM foods WHERE id = '$del'";
    if (mysqli_query($conn, $delete_comm) && mysqli_query($conn, $delete_food)){
        header("location:index.php");
    }
}


//IN COMMENT GET FOOD TITLE
if (isset($_GET['food'])) {
    $title = $_GET['food'];
    $select_query = "SELECT title FROM foods WHERE id = '$title'";
    $result = mysqli_query($conn, $select_query);
    foreach ($result as $i => $items) {
        $title = $items['title'];
    }
}

//ADD COMMENT:
if (isset($_POST['submit'])) {
    $food = $_GET['food'];

    $name = $_POST['name'];
    $text = $_POST['comments'];
    $date = date('Y-m-d H:i:s');

    if (strlen($name) >= 2 && strlen($name) <= 20) {
        $insert_comment = "INSERT INTO comment(name, text, date, food_id)
                        VALUES ('$name', '$text', '$date', '$food')";
        if (mysqli_query($conn, $insert_comment)) {
            header("location:../index.php");
        }
    }else {
        echo '<script>alert("Enter Name")</script>';
    }
}

