<?php

if (isset($_GET['delete'])){
    $del =  $_GET['delete'];
    $delete_query = "DELETE FROM items WHERE id='$del'";
    $res = mysqli_query($conn,$delete_query);
    header("location:index.php");
}
