<?php
    if (isset($_POST['insert'])){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $date = $_POST['date'];

        $insert_query = "INSERT INTO categories(title, author, date)
        VALUES ('$title', '$author', '$date')";
        if (mysqli_query($conn, $insert_query)){
            header("location:action.php");
        }else{
            echo "error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    }
?>

<div>
    <h2>Insert</h2>
    <form method="post">
        <input type="text" name="title">
        <br><br>
        <input type="text" name="author">
        <br><br>
        <input type="date" name="date">
        <br><br>
        <button name="insert">INSERT</button>
    </form>
</div>
