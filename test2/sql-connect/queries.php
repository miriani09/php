<?php
require_once "conn.php";

if (isset($_GET['submit'])) {
    $eng = $_GET['eng'];
    $geo= $_GET['geo'];

    if (strlen($eng) >= 2 && strlen($eng) <= 50){
        $insert = "INSERT INTO words(eng, geo)
                VALUES ('$eng', '$geo')";
        if (mysqli_query($conn, $insert)){
            header("location:index.php");
        }
    }else{
        echo '<script>alert("Enter Words.")</script>';
    }
}